<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include Bootstrap CSS -->
  <title>Business</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
    body {
      background-color: #002244;
      color: white;
    }
    
    .first-container {
      padding: 250px;
      background-color: #002244;
      color: white;

    }

    div .container,
    .first-container {
      background-color: #002244;
    }

    h1 {
      font-family: 'Montserrat';
      text-align: center;

    }

    /* body,
    .container,
    .first-container {
      background-image: url('shop.jpg');
      background-size: 100%;

    } */
  </style>
  <link rel="stylesheet" href="..\src\output.css">
</head>

<body>
  <?php include_once 'nav_bar.php' ?>

  <div class="flex flex-col min-h-[100dvh] w-screen">
    <main class="flex-1">
      <section class="w-full md:container md:mx-auto bg-gray-900 text-gray-50 dark:bg-gray-50 dark:text-gray-900">
        <div class="container md:px-6 text-center">
          <div class="space-y-2 first-container">
            <h1
              class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
              <b>Penang Beng's Curry Fish Head</b>
            </h1>
            <p
              class="mx-auto max-w-[700px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
              We take pride in delivering an array of mouthwatering dishes crafted to delight your senses and appease
              your appetite, ensuring a memorable culinary experience.
            </p>
          </div>
        </div>
      </section>
    </main>
    <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
      <p class="text-xs text-gray-500 dark:text-gray-400">© 2024 BCFH. All rights reserved.</p>

    </footer>
  </div>

  </section>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>