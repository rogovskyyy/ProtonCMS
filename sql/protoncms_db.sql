-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Mar 2021, 22:47
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `protoncms_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menus`
--

CREATE TABLE `menus` (
  `name` varchar(100) NOT NULL,
  `pathway` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `menus`
--

INSERT INTO `menus` (`name`, `pathway`, `type`, `description`) VALUES
('Home', '/', 'page', 'This is home page.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pages`
--

CREATE TABLE `pages` (
  `path` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pages`
--

INSERT INTO `pages` (`path`, `filename`) VALUES
('/', 'index.blade.php');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `mount_at` varchar(100) NOT NULL,
  `custom_path` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `author` varchar(32) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settings`
--

CREATE TABLE `settings` (
  `cfgKey` varchar(256) NOT NULL,
  `cfgValue` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `settings`
--

INSERT INTO `settings` (`cfgKey`, `cfgValue`) VALUES
('website_title', 'ProtonCMS Website'),
('default_template', 'default_theme');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `themes`
--

CREATE TABLE `themes` (
  `catalog` varchar(128) NOT NULL,
  `filename` varchar(256) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `themes`
--

INSERT INTO `themes` (`catalog`, `filename`, `content`) VALUES
('default_theme', 'index.blade.php', '<!doctype html>\r\n<html lang=\"en\">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">\r\n    <link rel=\"stylesheet\" href=\"{{ asset(\'css/index/index.css\') }}\">\r\n\r\n    <script src=\"https://kit.fontawesome.com/a5245399c2.js\" crossorigin=\"anonymous\"></script>\r\n    <title>Project Blacklink</title>\r\n\r\n    <link rel=\"shortcut icon\" href=\"{{ asset(\'home_content/favicon.ico\') }}\" type=\"image/x-icon\">\r\n    <link rel=\"icon\" href=\"{{ asset(\'home_content/favicon.ico\') }}\" type=\"image/x-icon\">\r\n    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" />\r\n  </head>\r\n  <body>\r\n    <section id=\'#home\'>\r\n      <div class=\'content\' id=\'home\'>\r\n        <div class=\'center\'><img src=\" {{ asset(\'home_content/logo.png\') }}\" style=\'width: 225px; height: 225px; left: 50\'></div>\r\n        \r\n        <h1 class=\"animate__animated animate__bounce\">First startup project to fly to the nearest Black Hole<br />\r\n        <span style=\'font-size: 11px\' >(not that really)</span></h1>\r\n\r\n      </div>\r\n    </section>\r\n\r\n    <section id=\'mission\'>\r\n      <div class=\'mission-box\'>\r\n        <div class=\'mission-content\'>\r\n          <div class=\'container\'>\r\n            Our goal? Reach this <i class=\"fas fa-arrow-down\"></i> <br/> <br /><br/> <br /><br/> <br /><br/> <br /><br/> <br /><br/> <br /><br/> <br /><br/> <br />\r\n            <canvas id=\"particle\" class=\'particles\'></canvas>\r\n          </div>\r\n        </div>\r\n      </div>  \r\n    </section>\r\n\r\n    <section id=\'whatsnext\'>\r\n      <div class=\'whatsnext\'>\r\n        <div style=\"width: 30%; background-image: url(\'{{ asset(\'home_content/rocket.jpg\') }}\');\"></div>\r\n        <div class=\"container\">\r\n          <div class=\"row\">\r\n            <div class=\"col-8\">\r\n              <img src=\"{{ asset(\'home_content/rocket.jpg\') }}\" style=\'width: 750px; height: 450px;\'>\r\n            </div>\r\n            <div class=\"col-4\"><h1>Our first rocket launched to Proxima Centauri</h1> <br />\r\n              <span style=\'font-size: 12px;\'>(https://pixabay.com/pl/photos/rakieta-ses-9-launch-cape-canaveral-1245696/)</span>\r\n            </div>\r\n          </div>\r\n          <br /><br /><br /><br />\r\n          <div class=\"row\">\r\n              <div class=\"col-8\"><h1>We connect the world giving the people jobs that ever dreamed about! Our datacenters are around the world. We need people like you.</h1> <br />\r\n              <span style=\'font-size: 12px\'>(This text doesn\'t make sense)</span>\r\n              </div>\r\n              <div class=\"col-4\"><img src=\"{{ asset(\'home_content/connect.jpg\') }}\" style=\'width: 750px; height: 450px;\'></div>\r\n          </div>\r\n          <br /><br /><br /><br />\r\n          <div class=\"row\">\r\n              <div class=\"col-9\"><img src=\"{{ asset(\'home_content/stars.jpg\') }}\" style=\'width: 900px; height: 450px;\'></div>\r\n              <div class=\"col-3\"><h3><b>Discover</b> unknown! Nobody ever imagined, humanity will ever fly to black hole, but now it\'s possible.\r\n                Join Blacklink now!\r\n              </h3> <br />\r\n              <span style=\'font-size: 12px;\'>(maybe?)</span>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </section>\r\n\r\n    <section id=\'career\'>\r\n      <div class=\'content\'>\r\n        <div class=\'container\'>\r\n        <div class=\"row\">\r\n        <div class=\"col-6\">\r\n        <input type=\'text\' placeholder=\"Your email here\"><br /><br />\r\n        <button class=\'button\'>Subscribe to newsletter</button>\r\n        </div>\r\n        <div class=\"col-6\"><div class=\'career-content\'>\r\n        <input type=\'text\' placeholder=\"Email\"><br /><br />\r\n        <input type=\'text\' placeholder=\"Question\"><br /><br />\r\n        <button class=\'button\'>Ask a question</button>\r\n        </div>\r\n        </div>\r\n        </div>\r\n        </div>\r\n        </div>\r\n    </section>\r\n    \r\n\r\n    <section id=\'contact\'>\r\n      <div class=\'contact-content\'>\r\n         <span style=\'text-align: center; font-size: 12px;\'>Powered by ProtonCMS <br />\r\n         Made with <span style=\"color: #e25555;\">&#9829;</span> by Bartosz Rogowski<br />&copy; 2021 - Blacklink</span>\r\n      </div>\r\n    </section>\r\n\r\n\r\n    <section id=\'contact\'>\r\n      <div class=\'content\'>\r\n      </div>\r\n    </section>\r\n\r\n    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\"></script>\r\n    <script> \r\n      window.requestAnimFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(t) {\r\n          window.setTimeout(t, 1e3 / 60)\r\n      };\r\n      var canvas = document.getElementById(\"particle\"),\r\n          ctx = canvas.getContext(\"2d\");\r\n\r\n      function Particle(t, i, s) {\r\n          this.angle = 2 * Math.random() * Math.PI, this.radius = Math.random(), this.opacity = (5 * Math.random() + 2) / 10, this.distance = 1 / this.opacity * s, this.speed = 3e-5 * this.distance, this.position = {\r\n              x: t + this.distance * Math.cos(this.angle),\r\n              y: i + this.distance * Math.sin(this.angle)\r\n          }, this.draw = function() {\r\n              ctx.fillStyle = \"rgba(255,255,255,\" + this.opacity + \")\", ctx.beginPath(), ctx.arc(this.position.x, this.position.y, this.radius, 0, 2 * Math.PI, !1), ctx.fill(), ctx.closePath()\r\n          }, this.update = function() {\r\n              this.angle += this.speed, this.position = {\r\n                  x: t + this.distance * Math.cos(this.angle),\r\n                  y: i + this.distance * Math.sin(this.angle)\r\n              }, this.draw()\r\n          }\r\n      }\r\n\r\n      function Emitter(t, i) {\r\n          this.position = {\r\n              x: t,\r\n              y: i\r\n          }, this.radius = 30, this.count = 3e3, this.particles = [];\r\n          for (var s = 0; s < this.count; s++) this.particles.push(new Particle(this.position.x, this.position.y, this.radius))\r\n      }\r\n      canvas.width = \'350\', canvas.height = \'350\', Emitter.prototype = {\r\n          draw: function() {\r\n              ctx.fillStyle = \"rgba(0,0,0,1)\", ctx.beginPath(), ctx.arc(this.position.x, this.position.y, this.radius, 0, 2 * Math.PI, !1), ctx.fill(), ctx.closePath()\r\n          },\r\n          update: function() {\r\n              for (var t = 0; t < this.count; t++) this.particles[t].update();\r\n              this.draw()\r\n          }\r\n      };\r\n      var emitter = new Emitter(canvas.width / 2, canvas.height / 2);\r\n\r\n      function loop() {\r\n          ctx.clearRect(0, 0, canvas.width, canvas.height), emitter.update(), requestAnimFrame(loop)\r\n      }\r\n      loop();    \r\n      </script>\r\n  </body>\r\n</html>');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `types`
--

CREATE TABLE `types` (
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `types`
--

INSERT INTO `types` (`name`) VALUES
('page'),
('post');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '55faeb8a3daf1df88643e62968b82f296a4212b45cd3c35e70cee0b4d6a25c29');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`pathway`),
  ADD KEY `menus_FK` (`type`);

--
-- Indeksy dla tabeli `pages`
--
ALTER TABLE `pages`
  ADD KEY `pages_FK` (`path`);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_FK` (`mount_at`),
  ADD KEY `posts_FK_1` (`author`);

--
-- Indeksy dla tabeli `types`
--
ALTER TABLE `types`
  ADD UNIQUE KEY `types_un` (`name`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_FK` FOREIGN KEY (`type`) REFERENCES `types` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_FK` FOREIGN KEY (`path`) REFERENCES `menus` (`pathway`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_FK` FOREIGN KEY (`mount_at`) REFERENCES `menus` (`pathway`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_FK_1` FOREIGN KEY (`author`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK` FOREIGN KEY (`groups`) REFERENCES `groups` (`group_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
