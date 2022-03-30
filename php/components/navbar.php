<?php
ob_start();
session_start();
session_gc();
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>

<header>
  <nav class="main-nav">
    <ul>
      <li>
        <h3 class="text-logo">Dabay</h3>
      </li>
      <?php
      if (isset($_SESSION["userID"])) {
        echo
        '
            <li class="searchbar">
              <form action="" method="get">
                <input type="search" name="search" id="search" placeholder="Search">
              </form>
            </li>
            <li>
              <a href="index.php?content=php/content/home">
                <svg class="stroke" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M1.25 20.75V11.0559L11 1.72976L20.75 11.0559V20.75H15.25V15.4348C15.25 13.0876 13.3472 11.1848 11 11.1848C8.65279 11.1848 6.75 13.0876 6.75 15.4348V20.75H1.25Z"
                    stroke-width="2.5" />
                </svg>
              </a>
            </li>
            <li>
              <a href="index.php?content=php/content/createpost">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.5556 0H2.44444C1.08778 0 0 1.1 0 2.44444V19.5556C0 20.9 1.08778 22 2.44444 22H19.5556C20.9 22 22 20.9 22 19.5556V2.44444C22 1.1 20.9 0 19.5556 0ZM19.5556 19.5556H2.44444V2.44444H19.5556V19.5556ZM9.77778 17.1111H12.2222V12.2222H17.1111V9.77778H12.2222V4.88889H9.77778V9.77778H4.88889V12.2222H9.77778V17.1111Z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="index.php?content=php/content/discover">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M11 0C4.928 0 0 4.928 0 11C0 17.072 4.928 22 11 22C17.072 22 22 17.072 22 11C22 4.928 17.072 0 11 0ZM11 19.8C6.149 19.8 2.2 15.851 2.2 11C2.2 6.149 6.149 2.2 11 2.2C15.851 2.2 19.8 6.149 19.8 11C19.8 15.851 15.851 19.8 11 19.8ZM4.95 17.05L13.211 13.211L17.05 4.95L8.789 8.789L4.95 17.05ZM11 9.79C11.671 9.79 12.21 10.329 12.21 11C12.21 11.671 11.671 12.21 11 12.21C10.329 12.21 9.79 11.671 9.79 11C9.79 10.329 10.329 9.79 11 9.79Z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="index.php?content=php/content/about" onclick="OpenNotivication()">
                  <svg width="22" height="22" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.65 4.25H9.35V5.95H7.65V4.25ZM7.65 7.65H9.35V12.75H7.65V7.65ZM8.5 0C3.808 0 0 3.808 0 8.5C0 13.192 3.808 17 8.5 17C13.192 17 17 13.192 17 8.5C17 3.808 13.192 0 8.5 0ZM8.5 15.3C4.7515 15.3 1.7 12.2485 1.7 8.5C1.7 4.7515 4.7515 1.7 8.5 1.7C12.2485 1.7 15.3 4.7515 15.3 8.5C15.3 12.2485 12.2485 15.3 8.5 15.3Z" />
                  </svg>
              </a>
              <ul id="notivication" class="sub-notivication">
              </ul>
            </li>
            ';
      } else {
        echo
        '
            <ul id="notivication" class="sub-notivication">
            </ul>
            ';
      }
      ?>
      <li>
        <button onclick="OpenAcount()">
          <img src="./img/svg/Account icon.svg" alt="Account">
        </button>
        <ul id="account" class="sub-account">
          <li>
            <a href="index.php?content=php/content/u-dashboard">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.5 0C3.808 0 0 3.808 0 8.5C0 13.192 3.808 17 8.5 17C13.192 17 17 13.192 17 8.5C17 3.808 13.192 0 8.5 0ZM4.3095 13.838C4.675 13.073 6.902 12.325 8.5 12.325C10.098 12.325 12.3335 13.073 12.6905 13.838C11.5345 14.756 10.081 15.3 8.5 15.3C6.919 15.3 5.4655 14.756 4.3095 13.838ZM13.906 12.6055C12.6905 11.1265 9.741 10.625 8.5 10.625C7.259 10.625 4.3095 11.1265 3.094 12.6055C2.227 11.4665 1.7 10.047 1.7 8.5C1.7 4.7515 4.7515 1.7 8.5 1.7C12.2485 1.7 15.3 4.7515 15.3 8.5C15.3 10.047 14.773 11.4665 13.906 12.6055ZM8.5 3.4C6.851 3.4 5.525 4.726 5.525 6.375C5.525 8.024 6.851 9.35 8.5 9.35C10.149 9.35 11.475 8.024 11.475 6.375C11.475 4.726 10.149 3.4 8.5 3.4ZM8.5 7.65C7.7945 7.65 7.225 7.0805 7.225 6.375C7.225 5.6695 7.7945 5.1 8.5 5.1C9.2055 5.1 9.775 5.6695 9.775 6.375C9.775 7.0805 9.2055 7.65 8.5 7.65Z" />
              </svg>
              Account
            </a>
          </li>
          <?php
          if (!isset($_SESSION["userrole"])) {
            // niet ingelogd
          } else {
            $userRole = $_SESSION["userrole"];
            if ($userRole == "user") {
            } else {
              echo '<li>
                  <a href="index.php?content=php/content/a-dashboard">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.5 0C3.808 0 0 3.808 0 8.5C0 13.192 3.808 17 8.5 17C13.192 17 17 13.192 17 8.5C17 3.808 13.192 0 8.5 0ZM4.3095 13.838C4.675 13.073 6.902 12.325 8.5 12.325C10.098 12.325 12.3335 13.073 12.6905 13.838C11.5345 14.756 10.081 15.3 8.5 15.3C6.919 15.3 5.4655 14.756 4.3095 13.838ZM13.906 12.6055C12.6905 11.1265 9.741 10.625 8.5 10.625C7.259 10.625 4.3095 11.1265 3.094 12.6055C2.227 11.4665 1.7 10.047 1.7 8.5C1.7 4.7515 4.7515 1.7 8.5 1.7C12.2485 1.7 15.3 4.7515 15.3 8.5C15.3 10.047 14.773 11.4665 13.906 12.6055ZM8.5 3.4C6.851 3.4 5.525 4.726 5.525 6.375C5.525 8.024 6.851 9.35 8.5 9.35C10.149 9.35 11.475 8.024 11.475 6.375C11.475 4.726 10.149 3.4 8.5 3.4ZM8.5 7.65C7.7945 7.65 7.225 7.0805 7.225 6.375C7.225 5.6695 7.7945 5.1 8.5 5.1C9.2055 5.1 9.775 5.6695 9.775 6.375C9.775 7.0805 9.2055 7.65 8.5 7.65Z" />
                    </svg>
                    Admin
                  </a>
                </li>';
            }
          }
          ?>
          <li>
            <a href="#" onclick="OpenSettings()">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.9946 9.333C15.0296 9.061 15.0558 8.789 15.0558 8.5C15.0558 8.211 15.0296 7.939 14.9946 7.667L16.8384 6.2645C17.0044 6.137 17.0481 5.9075 16.9433 5.7205L15.1956 2.7795C15.1169 2.6435 14.9684 2.567 14.8111 2.567C14.7587 2.567 14.7062 2.5755 14.6625 2.5925L12.4867 3.4425C12.0323 3.1025 11.5429 2.822 11.0099 2.6095L10.6778 0.357C10.6516 0.153 10.4681 0 10.2496 0H6.75424C6.53578 0 6.35227 0.153 6.32606 0.357L5.99399 2.6095C5.46095 2.822 4.9716 3.111 4.5172 3.4425L2.34132 2.5925C2.28889 2.5755 2.23646 2.567 2.18403 2.567C2.03548 2.567 1.88692 2.6435 1.80828 2.7795L0.0605851 5.7205C-0.0530148 5.9075 -0.000583993 6.137 0.165447 6.2645L2.00926 7.667C1.97431 7.939 1.94809 8.2195 1.94809 8.5C1.94809 8.7805 1.97431 9.061 2.00926 9.333L0.165447 10.7355C-0.000583993 10.863 -0.0442764 11.0925 0.0605851 11.2795L1.80828 14.2205C1.88692 14.3565 2.03548 14.433 2.19277 14.433C2.2452 14.433 2.29763 14.4245 2.34132 14.4075L4.5172 13.5575C4.9716 13.8975 5.46095 14.178 5.99399 14.3905L6.32606 16.643C6.35227 16.847 6.53578 17 6.75424 17H10.2496C10.4681 17 10.6516 16.847 10.6778 16.643L11.0099 14.3905C11.5429 14.178 12.0323 13.889 12.4867 13.5575L14.6625 14.4075C14.715 14.4245 14.7674 14.433 14.8198 14.433C14.9684 14.433 15.1169 14.3565 15.1956 14.2205L16.9433 11.2795C17.0481 11.0925 17.0044 10.863 16.8384 10.7355L14.9946 9.333V9.333ZM13.2644 7.8795C13.2993 8.143 13.3081 8.3215 13.3081 8.5C13.3081 8.6785 13.2906 8.8655 13.2644 9.1205L13.142 10.081L13.9198 10.676L14.8635 11.39L14.2518 12.4185L13.142 11.985L12.2332 11.628L11.4468 12.206C11.071 12.478 10.7128 12.682 10.3545 12.8265L9.42821 13.192L9.28839 14.1525L9.11362 15.3H7.89024L7.72421 14.1525L7.58439 13.192L6.65812 12.8265C6.28236 12.6735 5.93282 12.478 5.58329 12.223L4.78809 11.628L3.86181 11.9935L2.75203 12.427L2.14034 11.3985L3.08409 10.6845L3.86181 10.0895L3.73947 9.129C3.71326 8.8655 3.69578 8.67 3.69578 8.5C3.69578 8.33 3.71326 8.1345 3.73947 7.8795L3.86181 6.919L3.08409 6.324L2.14034 5.61L2.75203 4.5815L3.86181 5.015L4.77061 5.372L5.55707 4.794C5.93282 4.522 6.2911 4.318 6.64938 4.1735L7.57565 3.808L7.71547 2.8475L7.89024 1.7H9.10488L9.27091 2.8475L9.41073 3.808L10.337 4.1735C10.7128 4.3265 11.0623 4.522 11.4118 4.777L12.207 5.372L13.1333 5.0065L14.2431 4.573L14.8548 5.6015L13.9198 6.324L13.142 6.919L13.2644 7.8795ZM8.50193 5.1C6.57073 5.1 5.00655 6.6215 5.00655 8.5C5.00655 10.3785 6.57073 11.9 8.50193 11.9C10.4331 11.9 11.9973 10.3785 11.9973 8.5C11.9973 6.6215 10.4331 5.1 8.50193 5.1ZM8.50193 10.2C7.5407 10.2 6.75424 9.435 6.75424 8.5C6.75424 7.565 7.5407 6.8 8.50193 6.8C9.46316 6.8 10.2496 7.565 10.2496 8.5C10.2496 9.435 9.46316 10.2 8.50193 10.2Z" />
              </svg>
              Settings
            </a>
          </li>
          <!-- <li>
            <a href="index.php?content=php/content/about">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.65 4.25H9.35V5.95H7.65V4.25ZM7.65 7.65H9.35V12.75H7.65V7.65ZM8.5 0C3.808 0 0 3.808 0 8.5C0 13.192 3.808 17 8.5 17C13.192 17 17 13.192 17 8.5C17 3.808 13.192 0 8.5 0ZM8.5 15.3C4.7515 15.3 1.7 12.2485 1.7 8.5C1.7 4.7515 4.7515 1.7 8.5 1.7C12.2485 1.7 15.3 4.7515 15.3 8.5C15.3 12.2485 12.2485 15.3 8.5 15.3Z" />
              </svg>
              About
            </a>
          </li> -->
          <hr>
          <?php
          if (isset($_SESSION["userID"])) {
            echo '<li>
                    <a href="index.php?content=php/scripts/logout">
                    <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.2222 5.27778L11.8906 6.76611L13.3828 8.44444H5.66667V10.5556H13.3828L11.8906 12.2233L13.2222 13.7222L17 9.5L13.2222 5.27778ZM1.88889 2.11111H8.5V0H1.88889C0.85 0 0 0.95 0 2.11111V16.8889C0 18.05 0.85 19 1.88889 19H8.5V16.8889H1.88889V2.11111Z" />
                    </svg>
                    Logout</a>
                  </li>';
          } else {
            echo '<li class="nav-item">
                    <a href="index.php?content=php/components/register">Register</a>
                  </li>
                  <li>
                    <a href="index.php?content=php/components/login">Login</a>
                  </li>';
          }
          ?>

        </ul>
        <ul id="settings" class="sub-settings">
          <li>
            <a href="#">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5124 6.01238V2.48762H10.9876L8.5 0L6.01238 2.48762H2.48762V6.01238L0 8.5L2.48762 10.9876V14.5124H6.01238L8.5 17L10.9876 14.5124H14.5124V10.9876L17 8.5L14.5124 6.01238ZM13.0093 10.3638V13.0093H10.3638L8.5 14.8731L6.63616 13.0093H3.99072V10.3638L2.12688 8.5L3.99072 6.63616V3.99072H6.63616L8.5 2.12688L10.3638 3.99072H13.0093V6.63616L14.8731 8.5L13.0093 10.3638ZM8.5 4.36649C6.22281 4.36649 4.36649 6.22281 4.36649 8.5C4.36649 10.7772 6.22281 12.6335 8.5 12.6335C10.7772 12.6335 12.6335 10.7772 12.6335 8.5C12.6335 6.22281 10.7772 4.36649 8.5 4.36649Z" />
              </svg>
              Theme
              <label class="toggle">
                <input id="themeToggle" type="checkbox">
                <span class="roundbutton"></span>
              </label>
            </a>
          </li>
          <li>
            <a href="#">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.625 1.41663C8.70538 1.41663 7.04788 2.50746 6.21913 4.09413C5.31246 4.56871 4.56163 5.31246 4.09413 6.21913C2.50746 7.04788 1.41663 8.70538 1.41663 10.625C1.41663 13.3662 3.63371 15.5833 6.37496 15.5833C8.29454 15.5833 9.95204 14.4925 10.7808 12.9058C11.6875 12.4312 12.4383 11.6875 12.9058 10.7808C14.4925 9.95204 15.5833 8.29454 15.5833 6.37496C15.5833 3.63371 13.3662 1.41663 10.625 1.41663ZM6.37496 14.1666C4.41996 14.1666 2.83329 12.58 2.83329 10.625C2.83329 9.83163 3.09538 9.09496 3.54163 8.49996C3.54163 11.2412 5.75871 13.4583 8.49996 13.4583C7.90496 13.9045 7.16829 14.1666 6.37496 14.1666ZM8.49996 12.0416C6.54496 12.0416 4.95829 10.455 4.95829 8.49996C4.95829 7.70663 5.22038 6.96996 5.66663 6.37496C5.66663 9.10913 7.88371 11.3262 10.625 11.3333C10.03 11.7795 9.29329 12.0416 8.49996 12.0416ZM11.8291 9.70413C11.4537 9.83871 11.05 9.91663 10.625 9.91663C8.66996 9.91663 7.08329 8.32996 7.08329 6.37496C7.08329 5.94996 7.16121 5.54621 7.29579 5.17079C7.67121 5.03621 8.07496 4.95829 8.49996 4.95829C10.455 4.95829 12.0416 6.54496 12.0416 8.49996C12.0416 8.92496 11.9637 9.32871 11.8291 9.70413ZM13.4583 8.49996C13.4583 5.76579 11.2412 3.54871 8.49996 3.54163C9.09496 3.09538 9.82454 2.83329 10.625 2.83329C12.58 2.83329 14.1666 4.41996 14.1666 6.37496C14.1666 7.16829 13.9045 7.90496 13.4583 8.49996Z" />
              </svg>
              Animations
              <label class="toggle">
                <input id="animationToggle" type="checkbox">
                <span class="roundbutton"></span>
              </label>
            </a>
          </li>
          <hr>
          <li>
            <a href="#" onclick="OpenAcount()">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.25 5.25V8.25H4.3725L7.0575 5.5575L6 4.5L1.5 9L6 13.5L7.0575 12.4425L4.3725 9.75H15.75V5.25H14.25Z" />
              </svg>
              Back
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>