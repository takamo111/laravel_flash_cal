<template>
  <div>
    <the-header></the-header>
    <main>
      <div class="container">
        <article class="col-md-8 col-xs-12">
          <section>
            <h2 class="quiz-question-h2">
              <img class="quiz-question__logo" src="/images/what-is-mark.png" />
              問題{{quizNumber}}
            </h2>
            <p>{{title}}</p>
             <!-- V-ifは要素が真の場合のみ表示する-->
            <div V-if="imageSrc">
                <img v-bind:src="'images/' + title"/>
              <img class="img-responsive" id="quiz-image" :src="'/images/quiz/' + imageSrc" width="200" height="200" /></div>

            <div class="quiz-answer__list">
              <ul>             
                <li v-for="(answer, index) in answers" :key="index">
                  <a>
                    <button
                      @click="goAnswer(index+1)"
                      :disabled="isAlreadyAnswered"
                    >{{index+1}}</button>
                  </a>
                  {{answer}}
                </li>
              </ul>
            </div>
            <div class="text-right">カテゴリー: {{ categoryName }}</div>
          </section>
          <section>
            <h2 class="quiz-correct-h2">
              <img class="quiz-correct__logo" src="/images/correct-mark.png" />正解
            </h2>
            <p>
              <button
                class="quiz-correct-answer"
                v-show="isAlreadyAnswered"
                disabled
              >{{ correctAnswerNo }}</button>
            </p>
            <button @click="goAnswer(0)" v-show="!isAlreadyAnswered">正解を表示する</button>
            <div class="alert alert-info" v-show="isCorrect">
              <strong>正解!</strong>
            </div>
            <div class="alert alert-danger" v-show="isMistake">
              <strong>不正解!</strong>
            </div>
          </section>
          <section >
            <h2 class="quiz-commentary-h2">
              <img class="quiz-commentary__logo" src="/images/commentary-mark.png" />解説
            </h2>
            <div
              class="quiz-commentary__text"
              v-show="isAlreadyAnswered"
              style="white-space:pre-wrap; word-wrap:break-word;"
            >{{ commentary }}</div>

            <button
              type="button"
              class="btn btn-primary center-block"
              @click="goNextQuiz"
              v-if="!isQuizFinish"
            >次の問題へ</button>
            <button
              type="button"
              data-toggle="modal"
              data-target="#modal-result"
              class="center-block"
              v-if="isQuizFinish"
              @click="showResult"
            >結果を見る</button>
          </section>
        </article>
        <the-sidebar></the-sidebar>
      </div>
    </main>
    <the-footer></the-footer>
    <the-modal :correctPercentageObject="correctPercentageObject" ref="modal" ></the-modal>
  </div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";
import TheSidebar from "../layout/TheSidebar";
import TheModal from "../module/TheModal";

export default {
  components: {
    TheHeader,
    TheFooter,
    TheSidebar,
    TheModal
  },
  data() {
    return {
      quizData: [],
      title:"",
      imageSrc:"",
      answers:[],
      commentetary:"",
      correctAnswerNo: 0,
      isCorrect: false, 
      isMistake: false, 
      isAlreadyAnswered: false, 
      isQuizFinish: false, 
      score: 0,
      quizNumber: 1,
      categoryName: "",
       correctPercentageObject: {}
    };
  },
  mounted() {
    const categories = this.$route.query.categories;

    const loader = this.$loading.show();

    this.$http.get(`/api/quiz?categories=${categories}`).then(response => {
      this.quizData = response.data;
      if(this.quizData.length<10){
        alert("クイズ10問以下のため、初期画面に戻ります。カテゴリーを選択し直してください");
        location.href = "/";
      }else{
        this.findNextQuiz(0);
        loader.hide();
      }
      })
     .catch(error => {
        alert("クイズの読み込みに失敗したため、初期画面に戻ります");
        location.href = "/";
    });
  },

  methods:{
  goAnswer(selectAnswerNum){
    if(selectAnswerNum === 0){
      //selectAnswerNumが0なら、ボタンのクリック時に alert-info（正解）、alert-danger（不正解）を非表示
        this.isCorrect = false;
        this.isMistake = false;
    } else if (selectAnswerNum === Number(this.correctAnswerNo)) {
      //正解ならalert-infoを表示し、alert-dangerを非表示にする そしてスコアを加算する
      this.isCorrect = true;
      this.isMistake = false;
      this.score += 1;
    }else {
      // 不正解なら alert-infoを非表示し、alert-dangerを表示にする
        this.isMistake = true;
        this.isCorrect = false;
      }
      this.isAlreadyAnswered = true;
    //10門以上の回答でクイズ終了
    if(this.quizNumber >= 10){
      this.endQuiz();
    }
  },
    
    findNextQuiz(quizNumber) {
      window.scroll(0, 0);
      this.title = this.quizData[quizNumber].title;
      this.imageSrc = this.quizData[quizNumber].image_src;
      this.answers = [
        this.quizData[quizNumber].answer.answer_1,
        this.quizData[quizNumber].answer.answer_2,
        this.quizData[quizNumber].answer.answer_3,
        this.quizData[quizNumber].answer.answer_4
      ];
      this.commentary = this.quizData[quizNumber].answer.commentary;
      this.correctAnswerNo = this.quizData[quizNumber].answer.correct_answer_no;
      this.categoryName = this.quizData[quizNumber].category.name;
    },
    //次のクイズに移行する
    goNextQuiz(){
      if(this.quizNumber >= 10){
        this.endQuiz();
      } else {
        this.findNextQuiz(this.quizNumber);
        this.quizNumber += 1;
        this.isCorrect = false;
        this.isMistake = false;
        this.isAlreadyAnswered = false;
      }
    },
  //クイズを終了する
   endQuiz(){
      this.isQuizFinish = true;
      this.answerNo = "-";
      this.isAlreadyAnswered = true;
      this.correctPercentageObject = {
        correctScore: this.score,
        mistakeScore:  10 - this.score
      };
   },
   showResult(){
     this.$refs.modal.render();
   }
  }
};
</script>