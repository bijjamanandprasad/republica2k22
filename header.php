<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
      .navbar-brand{
        display:flex;
        justify-content:center;
        align-items:center;
      }
      .navbar-brand img{
        width: 50px;
        height:40px;
      }

      .navbar-brand p{
        font-weight:600;
        margin-bottom:0 !important;
      }
      .navbar-nav {
        margin-left: auto;
      }
      .nav-item {
        padding-right: 2em;
      }
      .nav-link {
        color: orange !important;
        font-size: 1.2em;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
      }
      .blue {
        color: blue !important;
      }
      .green {
        color: #1ecd14 !important;
      }
      .sdcac{
        color: orange !important;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="https://intranet.rguktn.ac.in/sdcac">
        <img src="./img/logo.png" alt="">
        &nbsp;
        <p class="sdcac">SDCAC-Presents</p>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link blue" href="events">events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link green" href="https://bit.ly/Republica2k22" target="_blank">register now</a>
          </li>
        </ul>
      </div>
    </nav>