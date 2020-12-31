<template>
  <aside class="col-md-4 col-xs-12">
    <section class="sidebar-sns-section">
      <h3 class="text-center sidebar-sns-h3">SNS共有</h3>
      <div class="sidebar-sns-links">
        <social-sharing title="shareボタン" inline-template>
          <div class="twitter__share">
            <network network="twitter">
              <i class="fab fa-twitter"></i> Twitter
            </network>
          </div>
        </social-sharing>
        <social-sharing title="shareボタン" inline-template>
          <div class="facebook__share">
            <network network="facebook">
              <i class="fab fa-facebook"></i> Facebook
            </network>
          </div>
        </social-sharing>
        <social-sharing title="shareボタン" inline-template>
          <div class="line__share">
            <network network="line">
              <i class="fab fa-line"></i> Line
            </network>
          </div>
        </social-sharing>
        <social-sharing title="shareボタン" inline-template>
          <div class="google__share">
            <network network="googleplus">
              <i class="fab fa-google"></i> google
            </network>
          </div>
        </social-sharing>
      </div>
    </section>

  </aside>
</template>