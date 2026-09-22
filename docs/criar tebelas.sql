CREATE DATABASE `laravel` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `produtos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `praso_validade` date NOT NULL,
  `qtd_atual` int(11) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `peso_kg` decimal(8,3) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  `categorias` bigint(20) unsigned NOT NULL,
  `qtd_min` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_categorias_foreign` (`categorias`),
  CONSTRAINT `produtos_categorias_foreign` FOREIGN KEY (`categorias`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `movimentacaos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `data_movimentacao` date NOT NULL,
  `tipo` enum('entrada','saida') NOT NULL,
  `produto_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movimentacaos_produto_id_foreign` (`produto_id`),
  KEY `movimentacaos_user_id_foreign` (`user_id`),
  CONSTRAINT `movimentacaos_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`),
  CONSTRAINT `movimentacaos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

