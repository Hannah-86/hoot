<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Friend Page</title>
    <link rel="stylesheet" href="./css/reboot.min.css" />
    <link rel="stylesheet" href="./css/friendpage.css" />
  </head>
  <body>
    <div class="global-container">
      <header class="header">
        <img src="./icon/hoot_logo.svg" alt="hoot img" class="header__logo" />
        <!-- <img src="./icon/search.png" alt="search img" class="header__search"> -->
        <!-- <a href="signin.html" class="header__signout">ログアウト</a> -->
      </header>
      <div class="main-container">
        <div class="profile">
          <div class="profile__left">
            <div class="profile__icon">
              <img src="./icon/icon_boy.png" alt="icon img" />
            </div>
            <div class="profile__follow-and-follower">
              <div>
                <span class="label">フォロー</span>
                <span class="number">10</span>
              </div>
              <div>
                <span class="label">フォロワー</span>
                <span class="number">10</span>
              </div>
            </div>
          </div>
          <div class="profile__right">
            <h4 class="profile__name">Taro</h4>
            <p class="profile__id">bbbbbb</p>
            <p class="profile__introduction">
              こんにちは。ここには自己紹介が表示されます。よろしくね！
            </p>
            <button
              class="profile__btn"
              onclick="location.href='edit-profile.html'"
            >
              フォローする
            </button>
          </div>
        </div>
        <ul class="list">
          <li class="list-item">
            <div class="list-item__icon">
              <img src="./icon/icon_boy.png" alt="icon img" />
            </div>
            <div class="list-item__info">
              <h4 class="list-item__name">Taro</h4>
              <audio src="#" controls></audio>
              <span class="list-item__tag">#男性</span>
              <span class="list-item__tag">#悲しい</span>
              <span class="list-item__tag">#泣</span>
              <div class="list-item__heard">
                <span class="list-item__number">17</span>
                <img src="./icon/ear_purple.png" alt="ear img" />
              </div>
            </div>
          </li>
          <li class="list-item">
            <div class="list-item__icon">
              <img src="./icon/icon_boy.png" alt="icon img" />
            </div>
            <div class="list-item__info">
              <h4 class="list-item__name">Taro</h4>
              <audio src="#" controls></audio>
              <span class="list-item__tag">#男性</span>
              <span class="list-item__tag">#悲しい</span>
              <span class="list-item__tag">#泣</span>
              <div class="list-item__heard">
                <span class="list-item__number">17</span>
                <img src="./icon/ear_purple.png" alt="ear img" />
              </div>
            </div>
          </li>
          <li class="list-item">
            <div class="list-item__icon">
              <img src="./icon/icon_boy.png" alt="icon img" />
            </div>
            <div class="list-item__info">
              <h4 class="list-item__name">Taro</h4>
              <audio src="#" controls></audio>
              <span class="list-item__tag">#男性</span>
              <span class="list-item__tag">#悲しい</span>
              <span class="list-item__tag">#泣</span>
              <div class="list-item__heard">
                <span class="list-item__number">17</span>
                <img src="./icon/ear_purple.png" alt="ear img" />
              </div>
            </div>
          </li>
          <li class="list-item">
            <div class="list-item__icon">
              <img src="./icon/icon_boy.png" alt="icon img" />
            </div>
            <div class="list-item__info">
              <h4 class="list-item__name">Taro</h4>
              <audio src="#" controls></audio>
              <span class="list-item__tag">#男性</span>
              <span class="list-item__tag">#悲しい</span>
              <span class="list-item__tag">#泣</span>
              <div class="list-item__heard">
                <span class="list-item__number">17</span>
                <img src="./icon/ear_purple.png" alt="ear img" />
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- <button class="menu-left" onclick="location.href='mypage.html'">
        <img class="home" src="./icon/home.png" alt="home img">
      </button> -->
      <button class="menu-left" onclick="location.href='index.html'">
        <img class="timeline" src="./icon/timeline.png" alt="timeline img" />
      </button>
      <button class="menu-right" onclick="location.href='record.html'">
        <img class="mic" src="./icon/mic.png" alt="mic img" />
      </button>
    </div>
  </body>
</html>
