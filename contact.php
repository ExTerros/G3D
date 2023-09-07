<?php
if (isset($_POST['contactForm'])) {
  if (!empty($_POST['email']) and !empty($_POST['message'])) {
    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"Site G3D Fumigation"<' . $_POST['email'] . '>' . "\n";
    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
    $header .= 'Content-Transfer-Encoding: 8bit';

    $message = '
		<html>
			<body>
				<div align="center">
					<u>Mail de l\'expéditeur :</u>' . $_POST['email'] . '<br />
					<br />
					' . nl2br($_POST['message']) . '
				</div>
			</body>
		</html>
		';

    mail("g3dservice@gmail.com", "CONTACT - G3D.com", $message, $header);
    $msg = "Votre message a bien été envoyé !";
  } else {
    $error = "Tous les champs doivent être complétés !";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>G3D Fumigation Contact</title>
  <link rel="icon" type="image/png" href="/assets/logo.png" />

  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

  <script src="https://kit.fontawesome.com/f1cb767a46.js" crossorigin="anonymous"></script>

  <script src="js/app.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="dist/style.css">
  <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>

  <script>
    // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
    if (
      localStorage.getItem('color-theme') === 'dark' ||
      (!('color-theme' in localStorage) &&
        window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  </script>

</head>

<body class="dark:bg-gray-900">

  <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700 w-full z-30">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
        <img src="assets/logo.png" class="h-8 mr-3" alt="G3D Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">G3D Fumigation</span>
      </a>
      <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col font-medium items-center mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700" id="nav-ul">
          <li>
            <a href="index.html" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
              Accueil</a>
          </li>
          <li>
            <a href="index.html#fumigation" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Fumigation</a>
          </li>
          <li>
            <a href="index.html#désinsectisation" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Désinsectisation</a>
          </li>
          <li>
            <a href="index.html#dératisation" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Dératisation</a>
          </li>
          <li>
            <a href="index.html#désinfection" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Désinfection</a>
          </li>
          <li>
            <a class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Contact</a>
          </li>
          <li>
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
              <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
              </svg>
              <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
              </svg>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="text-gray-600 body-font relative border-gray-300 border-t-4">
    <div class="absolute inset-0 bg-gray-300">
      <iframe class="dark:grayscale " width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.40287206329!2d1.0064066!3d49.287710999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e11ed7b3dbcef1%3A0xec160e0f8abe55b9!2s16%20Rue%20de%20Roanne%2C%2076500%20Elbeuf!5e0!3m2!1sfr!2sfr!4v1683483546932!5m2!1sfr!2sfrhttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.2712808398496!2d1.0071238999999998!3d49.290203999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e11ed819269d5b%3A0x4b4a66f866b9bd64!2s16%20Rue%20Gr%C3%A9mont%2C%2076500%20Elbeuf!5e0!3m2!1sfr!2sfr!4v1693093643587!5m2!1sfr!2sfr"></iframe>
    </div>
    <form action="" method="post">
      <div class="container px-5 py-24 mx-auto flex opacity-0" id="form-contact">
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
          <?php
          if (isset($msg)) {
            echo '<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">';
            echo '<p class="font-bold">Informational message</p>';
            echo '<p class="text-sm">' . $msg . '</p>';
            echo '</div>';
          }
          ?>
          <?php
          if (isset($error)) {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">Erreur</strong>';
            echo '<span class="block sm:inline">'. $error .'</span>';
            echo '</div>';
          }
          ?>
          <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Nous contacter</h2>
          <p class="leading-relaxed text-gray-600">Nous ferons de notre mieux pour vous répondre dans les plus brefs délais.</p>
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600 after:content-['*'] after:ml-0.5 after:text-red-500">Email</label>
            <input type="email" id="email" name="email" class="peer w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" required>
            <p class=" invisible peer-invalid:visible text-pink-600 text-sm">Veuillez fournir une adresse email valide.</p>
          </div>
          <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600 after:content-['*'] after:ml-0.5 after:text-red-500">Message</label>
            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" ></textarea>
          </div>
          <button type="submit" name="contactForm" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Envoyer</button>

        </div>
      </div>
    </form>
  </section>


  <footer class="border-gray-300 border-t-4">
    <div class="container px-5 mx-auto">
    </div>
    <div class="mx-auto w-full border-gray-200 bg-gray-50 dark:bg-gray-600 mt-0">
      <div class="flex justify-around gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">G3D FUMIGATION</h2>
          <ul class="text-gray-500 dark:text-gray-400 font-medium">
            <li class="mb-4">
              <a href="index.html#fumigation" class=" hover:underline">Fumigation</a>
            </li>
            <li class="mb-4">
              <a href="index.html#désinsectisation" class="hover:underline">Désinsectisation</a>
            </li>
            <li class="mb-4">
              <a href="index.html#dératisation" class="hover:underline">Dératisation</a>
            </li>
            <li class="mb-4">
              <a href="index.html#désinfection" class="hover:underline">Désinfection</a>
            </li>
          </ul>
        </div>
        <div>
          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Nous contacter</h2>
          <ul class="text-gray-500 dark:text-gray-400 font-medium">
            <li class="mb-4">
              <a href="https://goo.gl/maps/HVopXmLCcgZTdzAd9" class="hover:underline">16 rue Grémont 76500 - Elbeuf</a>
            </li>
            <li class="mb-4">
              <a href="tel:+33659995723" class="hover:underline">06 83 89 24 81</a>
            </li>
            <li class="mb-4">
              <a href="mailto:g3dservice@gmail.com" class="hover:underline">g3dservice@gmail.com</a>
            </li>
            <li class="mb-4">
              <a href="contact.php" class="hover:underline">Devis / informations</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700">
        <p class="text-sm text-gray-500 dark:text-gray-300 sm:text-center text-center">Copyright © 2023<a href="index.html">G3D Fumigation</a>. Entreprise de dératisation, désinsectisation & désinfection.
          </span>
      </div>
    </div>
  </footer>

</body>

</html>