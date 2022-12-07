
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./favicon.png" type="image/png" sizes="16x16" />
    <title>Social media website using html,css,js - Octapia</title>
    <!-- Styles  -->
    <link rel="stylesheet" href="./css/default.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style1.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <!-- Styles End  -->
  </head>
  <body>
    <!-- Header Section -->

    <header class="header" id="header">
      <div class="row">
        <aside class="col left">
          <a href="./" class="logo">
            CrimeAwarness
          </a>
        </aside>
        <aside class="col center">
          <nav class="nav">
            <a href="home.php" class="link">
              <i class="icon fas fa-home"></i>
            </a>

            <a href="./#" class="link">
              <i class="icon fas fa-bell"></i>
              <span class="counter">10</span>
            </a>
            <a href="./#" class="link">
              <i class="icon fas fa-envelope"></i>
              <span class="counter">70</span>
            </a>
            <a href="./#" class="link">
              <i class="icon fas fa-video"></i>
              <span class="counter">50</span>
            </a>
          </nav>
        </aside>
        <aside class="col right">
          <div class="profile">
            <img src="image/profile.jpeg" alt="profile-pic" class="img" />
            <i
              class="fas fa-ellipsis-h icon"
              title="Profile Settings"
              id="settingsMenuIcon"
            ></i>
          </div>
        </aside>
        <!-- /.col.right -->  

        <nav class="navSetting">
          <a href="profile.php" class="block">
            <img
              src="image/profile.jpeg"
              alt="profile-pic"
              class="icon"
            />
            <div class="right">
              <aside>
                <h4 class="title">Sakil Jomadder</h4>
                <span class="help">see your profile</span>
              </aside>
            </div>
          </a>

          <!-- /.block  user -->

          <a href="./#" class="block">
            <i class="fas fa-star icon"></i>
            <div class="right">
              <aside>
                <h4 class="title">give feedback</h4>
                <span class="help">help us to improve our app</span>
              </aside>
            </div>
          </a>
          <!-- /.block  feedback-->

          <div class="options">
            <a href="./#" class="option">
              <div class="left">
                <i class="fas fa-cog icon"></i>
                <h4 class="title">Settings & privacy</h4>
              </div>
              <div class="right">
                <i class="fas fa-chevron-right icon"></i>
              </div>
            </a>
            <!-- /.option  -->
            <a href="./#" class="option">
              <div class="left">
                <i class="fas fa-question icon"></i>
                <h4 class="title">help & support</h4>
              </div>
              <div class="right">
                <i class="fas fa-chevron-right icon"></i>
              </div>
            </a>
            <!-- /.option  -->

            <a href="./#" class="option">
              <div class="left">
                <i class="fas fa-tv icon"></i>
                <h4 class="title">display & accessibility</h4>
              </div>
              <div class="right">
                <i class="fas fa-chevron-right icon"></i>
              </div>
            </a>
            <!-- /.option  -->

            <a href="./#" class="option">
              <div class="left">
                <i class="fas fa-moon icon"></i>
                <h4 class="title">dark mode</h4>
              </div>
              <div class="right">
                <aside class="themeBtn">
                  <span class="circle dark"></span>
                </aside>
              </div>
            </a>
            <!-- /.option  -->

            <a href="index.php" class="option">
              <div class="left">
                <i class="fas fa-sign-out-alt icon"></i>
                <h4 class="title">logout</h4>
              </div>
            </a>
            <!-- /.option  -->
          </div>
          <!-- /.options -->
          <nav class="footerLinks">
            <a href="./#" class="link">about</a>
            <a href="./#" class="link">privacy</a>
            <a href="./#" class="link">terms</a>
            <a href="./#" class="link">cookies</a>
            <a href="./#" class="link">advertisement</a>
            <a href="./#" class="link">more</a>
            <span>copyright &copy; 2021. Octapia</span>
          </nav>
        </nav>
        <!-- /.navSetting -->
      </div>
    </header>
    <!-- Header Section End -->
    <!-- Left Sidebar Section -->
    <section class="leftSidebar" id="leftSidebar">
      <div class="row">
        <a href="profile.php" class="profile">
          <img src="image/profile.jpeg" alt="member-1" class="img" />
          <span class="name">Sakil Jomadder</span>
        </a>

        <nav class="navLinks">
          <a href="./#videos" class="link">
            <i class="fab fa-deezer icon"></i>
            <span class="name">Most recent</span>
          </a>

          <a href="./#videos" class="link">
            <i class="fas fa-layer-group icon"></i>
            <span class="name">groups</span>
          </a>
          <a href="./#videos" class="link">
            <i class="fas fa-gamepad icon"></i>
            <span class="name">post</span>
          </a>
          <a href="./#videos" class="link">
            <i class="fas fa-video icon"></i>
            <span class="name">videos</span>
          </a>
          <a class="link">
            <i class="fas fa-chevron-down icon"></i>
            <span class="name">see more</span>
          </a>
        </nav>
      </div>
      <!-- /.row -->
      <!-- /.row -->
    </section>

    <!-- Main Content Section -->
    <section class="main" id="main">
      <div class="container">
        <div class="stories">
          <article class="story">
            <a href="./#stories" class="linkStory"
              ><img src="image/cyber.jpeg" alt="status-1" class="img"
            /></a>
            <a href="./#create-story" class="createStoryBtn">
              <i class="fas fa-plus"></i>
            </a>
            <a class="name">create story</a>
          </article>

          <article class="story">
            <img src="image/profile2.jpeg" alt="status-2" class="avatar" />
            <a href="./#stories" class="linkStory"
              ><img src="image/froud.jpeg" alt="status-1" class="img"
            /></a>
            <a href="image/profile2.jpeg" class="name">kiron</a>
          </article>

          <article class="story">
            <img src="image/profile3.jpeg" alt="status-3" class="avatar" />
            <a href="./#stories" class="linkStory"
              ><img src="image/post.jpeg" alt="status-1" class="img"
            /></a>
            <a href="image/profile3.jpeg" class="name">rubel</a>
          </article>

          <article class="story">
            <img src="image/profile4.jpeg" alt="status-4" class="avatar" />
            <a href="./#stories" class="linkStory"
              ><img src="image/Post1.png" alt="status-1" class="img"
            /></a>
            <a href="image/profile4.jpeg" class="name">hasan</a>
          </article>
        </div>
        <!-- /.stories -->
        <div class="post">
          <div class="content">
            <img
              src="image/profile.jpeg"
              alt="profile-pic"
              class="avatar"
            />
            <input
              type="text"
              class="textBox"
              placeholder="what's on your mind, sakil?"
            />
          </div>
          <!-- /.content  -->
          <div class="features">
            <div class="feature">
              <i class="fas fa-video icon" title="Live Video"></i>
              <span class="name hidden">videos</span>
            </div>
            <div class="feature">
              <i class="fas fa-photo-video icon" title="Photo/Video"></i>
              <span class="name hidden">photo</span>
            </div>
            <div class="feature">
              <i class="fas fa-grin icon" title="Feeling/Activity"></i>
              <span class="name hidden">feeling/activity</span>
            </div>
            <!-- /.feature -->
          </div>
          <!-- /.features -->
        </div>
        <!-- /.post -->

        <div class="postPublished">
          <header class="top">
            <div class="user">
              <img
                src="image/profile3.jpeg"
                alt="profile-pic"
                class="avatar"
              />
              <div class="info">
                <a href="image/profile3.jpeg" class="name">
                  Sakil Jomadder
                  <i class="fas fa-check-circle icon"></i>
                </a>
                <p class="time">25 Nov 2022 11:20</p>
              </div>
            </div>
            <!-- /.user -->
            <div class="actions">
              <i class="fas fa-ellipsis-v icon"></i>
            </div>
          </header>
          <!-- /.header -->
          <div class="content">
            <p class="text">
              Please subscribe
              <a href="./#hashtag" class="link">@Octapia </a>youtube channel,
              facebook page and group. let us grow up. Thanks.
              <a href="/.#hashtag" class="link">#Octapia </a>
              <a href="/.#hashtag" class="link">#WebDesign</a>
            </p>
            <img src="image/cyber.jpeg" alt="news" class="img" />
          </div>
          <!-- /.content -->
          <div class="bottom">
            <div class="after">
              <article class="likes">
                <i class="fas fa-angry icon"></i>
                <i class="fas fa-sad-cry icon"></i>
                sakil & 100 others
              </article>

              <div class="others">
                <article class="box">50 comments</article>
                <article class="box">30 share</article>
              </div>
            </div>
            <!-- /.after -->
            <div class="before">
              <div class="box">
                <i class="fas fa-thumbs-up icon"></i>
                like
              </div>
              <!-- /.box -->
              <div class="box">
                <i class="fas fa-comment-alt icon"></i>
                comment
                <div class="comment-popup">
                  <input type="text" name="comment" placeholder="Enter your comment" />
                </div>
              </div>
              <!-- /.box -->
              <div class="box">
                <i class="fas fa-share-square icon"></i>
                share
              </div>
              <!-- /.box -->
              <div class="box">
                <img
                  src="image/profile.jpeg"
                  alt="profile-pic"
                  class="avatar"
                />
                <i class="fas fa-caret-down icon"></i>
              </div>
              <!-- /.box -->
            </div>
            <!-- /.after  -->
          </div>
          <!-- /.bottom -->
        </div>

        <div class="postPublished">
          <header class="top">
            <div class="user">
              <img
                src="image/profile3.jpeg"
                alt="profile-pic"
                class="avatar"
              />
              <div class="info">
                <a href="image/profile.jpeg" class="name">
                  Jon Sena
                  <i class="fas fa-check-circle icon"></i>
                </a>
                <p class="time">23 Nov 2022 09:23</p>
              </div>
            </div>
            <!-- /.user -->
            <div class="actions">
              <i class="fas fa-ellipsis-v icon"></i>
            </div>
          </header>
          <!-- /.header -->
          <div class="content">
            <p class="text">
              Please subscribe
              <a href="./#hashtag" class="link">@Octapia </a>youtube channel,
              facebook page and group. let us grow up. Thanks.
              <a href="/.#hashtag" class="link">#Octapia </a>
              <a href="/.#hashtag" class="link">#WebDesign</a>
            </p>
            <img src="image/froud.jpeg" alt="news" class="img" />
          </div>
          <!-- /.content -->
          <div class="bottom">
            <div class="after">
              <article class="likes">
                <i class="fas fa-angry icon"></i>
                <i class="fas fa-sad-cry icon"></i>
                sakil & 100 others
              </article>

              <div class="others">
                <article class="box">50 comments</article>
                <article class="box">30 share</article>
              </div>
            </div>
            <!-- /.after -->
            <div class="before">
              <div class="box">
                <i class="fas fa-thumbs-up icon"></i>
                like
              </div>
              <!-- /.box -->
              <div class="box">
                <i class="fas fa-comment-alt icon"></i>
                comment
                <div class="comment-popup">
                  <input type="text" name="comment" placeholder="Enter your comment" />
                </div>
              </div>
              <!-- /.box -->
              <div class="box">
                <i class="fas fa-share-square icon"></i>
                share
              </div>
              <!-- /.box -->
              <div class="box">
                <img
                  src="image/profile.jpeg"
                  alt="profile-pic"
                  class="avatar"
                />
                <i class="fas fa-caret-down icon"></i>
              </div>
              <!-- /.box -->
            </div>
            <!-- /.after  -->
          </div>
          <!-- /.bottom -->
        </div>
    </section>
    <!-- Main Content Section End -->

    <!-- Scripts -->
    <script src="./js/main.js"></script>
    <!-- Scripts End -->
  </body>
</html>
