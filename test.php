<?php
  $username = "Raoul v Wijk";
  $upvotes = 6;

  $commenttitle = "test";
  $commenttext = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, quaerat.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/css/style.css">
  <script defer src="./js/app.js"></script>
</head>
<body>
  <div class="post">
    <div class="post-header">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="24" height="24" rx="12" fill="#D7D7D7"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9959 21.7509C17.0264 23.1664 14.6105 24 12 24C8.93576 24 6.13978 22.8515 4.01904 20.9614C4.29511 17.0707 7.53896 14 11.5 14C15.6421 14 19 17.3579 19 21.5C19 21.5839 18.9986 21.6676 18.9959 21.7509Z" fill="#BFBCBC"/>
        <rect x="7" y="6" width="9" height="9" rx="4.5" fill="#BDBCBC"/>
      </svg>
      <p><?php echo $username; ?></p>
      <a class="dots" href="">
        <svg width="16" height="4" viewBox="0 0 16 4" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0ZM14 0C12.9 0 12 0.9 12 2C12 3.1 12.9 4 14 4C15.1 4 16 3.1 16 2C16 0.9 15.1 0 14 0ZM8 0C6.9 0 6 0.9 6 2C6 3.1 6.9 4 8 4C9.1 4 10 3.1 10 2C10 0.9 9.1 0 8 0Z"/>
        </svg>
      </a>
    </div>
    <div class="post-body">
      <h3>Lorem, ipsum dolor.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, nisi inventore? Ab aut quidem rerum reiciendis impedit officia pariatur hic non fugiat quis doloribus optio iusto porro sint harum sapiente quisquam est omnis, qui laborum rem, dolores odio soluta commodi.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus officiis quam dolorem voluptate, sit deserunt labore totam, dolorum aliquam, repudiandae ratione debitis? Ut recusandae magnam eveniet accusamus, doloremque nihil eius eos nostrum unde ducimus est illum. Officia, maxime. Dicta, et.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A illo aliquam consequatur saepe quis ipsum nam quidem dolore praesentium, dolor eum repellendus assumenda sapiente delectus, aut quae dicta unde voluptate veritatis, quaerat enim? Cumque sunt ad cum dignissimos voluptate numquam corrupti doloribus possimus, praesentium obcaecati ab ea reiciendis consequuntur adipisci laborum temporibus, sequi magnam ipsa! Quibusdam molestiae numquam sequi quaerat?</p>
    </div>
    <div class="post-comments column">
      <div>
        <a href="">
          <svg class="upvote-svg" width="22" height="20" viewBox="0 0 22 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.9208 18.3862L17.9207 18.3862L17.9169 18.3954C17.7688 18.7508 17.4177 19 17 19H8C7.45228 19 7 18.5477 7 18V8C7 7.72089 7.11059 7.47362 7.28711 7.29711L13.1733 1.41087L13.5229 1.75711C13.5233 1.75751 13.5237 1.75792 13.5241 1.75833C13.6064 1.84122 13.6602 1.95561 13.6688 2.07612L13.6496 2.2811L12.7109 6.79647L12.4607 8H13.69H20C20.5477 8 21 8.45228 21 9V11C21 11.1217 20.9784 11.2348 20.9336 11.353L17.9208 18.3862ZM1 9H3V19H1V9Z" stroke="" stroke-width="2"/>
          </svg>
        </a>
        <a href="">
          <svg class="comment-svg" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 15H3.58579L3.29289 15.2929L1 17.5858V2C1 1.45228 1.45228 1 2 1H18C18.5477 1 19 1.45228 19 2V14C19 14.5477 18.5477 15 18 15H4Z" stroke="" stroke-width="2"/>
          </svg>
        </a>
      </div>
      <p><?php echo $upvotes ?> likes</p>
      <div>
        <p>
          <strong><?php echo $username ?></strong>
          <?php echo $commenttext ?>
        </p>
      </div>
      <a class="btmborder" href="#"><strong>more</strong></a>
      <form class="row" action="">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="24" height="24" rx="12" fill="#D7D7D7"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9959 21.7509C17.0264 23.1664 14.6105 24 12 24C8.93576 24 6.13978 22.8515 4.01904 20.9614C4.29511 17.0707 7.53896 14 11.5 14C15.6421 14 19 17.3579 19 21.5C19 21.5839 18.9986 21.6676 18.9959 21.7509Z" fill="#BFBCBC"/>
          <rect x="7" y="6" width="9" height="9" rx="4.5" fill="#BDBCBC"/>
        </svg>
        <input class="comment-input" type="text" placeholder="Comment here....">
      </form>
    </div>
  </div>
</body>
</html>