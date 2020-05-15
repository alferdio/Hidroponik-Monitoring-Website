<!DOCTYPE html>
<html>
<head>
	
<style type="text/css">
	.clock {
  &-day {
    &:before {
      content: var(--timer-day);
    }
  }
  &-hours {
    &:before {
      content: var(--timer-hours);
    }
  }
  &-minutes {
    &:before {
      content: var(--timer-minutes);
    }
  }
  &-seconds {
    &:before {
      content: var(--timer-seconds);
    }
  }
}

body {
  background: linear-gradient(45deg, #1870ed 0, #f18f88 100%);
  font-family: 'Montserrat', 'sans-serif';
  min-height: 100vh; 
  display: flex;
  align-items: center;
  justify-content: center;
}

.clock {
  &-container {
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: #080808;
    border-radius: 5px;
    padding: 60px 20px;
    box-shadow: 1px 1px 5px rgba(255,255,255,.15), 0 15px 90px 30px rgba(0,0,0,.25);
    display: flex;
  }
  &-col {
    text-align: center;
    margin-right: 40px;
    margin-left: 40px;
    min-width: 90px;
    position: relative;
    &:not(:last-child):before,
    &:not(:last-child):after{
      content: "";
      background-color: rgba(255,255,255,.3);
      height: 5px;
      width: 5px;
      border-radius: 50%;
      display: block;
      position: absolute;
      right: -42px;
    }
    &:not(:last-child):before {
      top: 35%;
    }
    &:not(:last-child):after {
      top: 50%;
    }
  }
  &-timer {
    &:before {
      color: #fff;
      font-size: 4.2rem;
      text-transform: uppercase;
    }
  }
  &-label {
    color: rgba(255,255,255,.35);
    text-transform: uppercase;
    font-size: .7rem;
    margin-top: 10px;
  }
}

@media (max-width: 825px) {
  .clock-container {
  flex-direction: column;
    padding-top: 40px;
    padding-bottom: 40px;
  }
  .clock-col {
    & + & {
      margin-top: 20px;
    }
    &:before,
    &:after {
      display: none!important;
    }
  }
}
	</style>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- flipTimer CSS -->
<link rel="stylesheet" href="css/flipTimer.css">
<!-- flipTimer JS -->
<script src="js/jquery.flipTimer.js"></script>
</head>
<body>

<div class="clock-container">
  <div class="clock-col">
    <p class="clock-day clock-timer">
    </p>
    <p class="clock-label">
      Day
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-hours clock-timer">
    </p>
    <p class="clock-label">
      Hours
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-minutes clock-timer">
    </p>
    <p class="clock-label">
      Minutes
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-seconds clock-timer">
    </p>
    <p class="clock-label">
      Seconds
    </p>
  </div>
</div>

</body>
</html>
