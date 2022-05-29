BEGIN;

INSERT INTO `locations` (`id`, `name`, `country`, `state`, `city`, `address`, `details`, `postal_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Santa Ana', 'El Salvador', 'Santa Ana', 'Santa Ana', '25 Calle Poniente 14/16 Avenida Norte', NULL, '0210', '2022-05-29 06:40:42', '2022-05-29 06:40:42', NULL),
(2, 'San Salvador', 'El Salvador', 'San Salvador', 'San Salvador', 'Calle Los Próceres #525', NULL, '0110', '2022-05-29 06:41:14', '2022-05-29 06:41:14', NULL),
(3, 'San Miguel', 'El Salvador', 'San Miguel', 'San Miguel', 'Calle Salvador Dutriz 24/26 Avenida Sur #17', NULL, '0310', '2022-05-29 06:42:07', '2022-05-29 06:42:07', NULL),
(4, 'La Esperanza', 'Guatemala', 'Guatemala', 'Antigua Guatemala', 'Calle Volcán de agua y avenida los dos volcanes', NULL, '2210', '2022-05-29 06:43:12', '2022-05-29 06:43:12', NULL),
(5, 'El Copinol', 'Honduras', 'Tegucigalpa', 'Tegucigalpa', 'Avenida los Abetos #560', NULL, '3042', '2022-05-29 06:44:28', '2022-05-29 06:44:28', NULL);

INSERT INTO `distributors` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`, `location_id`) VALUES
(1, 'Distrbuidora Hondureña S.A. de C.V.', NULL, '2022-05-29 06:45:00', '2022-05-29 06:45:00', NULL, 5),
(2, 'Importadora Dos Volcanes S.A. de C.V.', NULL, '2022-05-29 06:45:19', '2022-05-29 06:45:19', NULL, 4);

INSERT INTO `stores` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`, `location_id`) VALUES
(1, 'Santa Ana #1', NULL, '2022-05-29 06:45:40', '2022-05-29 06:45:40', NULL, 1),
(2, 'Santa Ana La Frontera', NULL, '2022-05-29 06:46:11', '2022-05-29 06:46:11', NULL, 1),
(3, 'San Miguel', NULL, '2022-05-29 06:46:23', '2022-05-29 06:46:23', NULL, 3),
(4, 'Central', NULL, '2022-05-29 06:46:30', '2022-05-29 06:46:30', NULL, 2);

INSERT INTO `product_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Listo', '2022-05-29 06:48:57', '2022-05-29 06:48:57', NULL),
(2, 'En preparación', '2022-05-29 06:49:05', '2022-05-29 06:49:05', NULL),
(3, 'Agotado', '2022-05-29 06:49:10', '2022-05-29 06:49:10', NULL),
(4, 'Expirado', '2022-05-29 06:49:14', '2022-05-29 06:49:14', NULL);

INSERT INTO `products` (`id`, `sku`, `name`, `description`, `unit_price`, `weight`, `due_date`, `production_date`, `created_at`, `updated_at`, `deleted_at`, `status_id`) VALUES
(1, 'CL0355L', 'Crazy Lola Lata 355 ml', NULL, '0.25', 0.20, '2022-09-01', '2022-05-24 18:50:30', '2022-05-29 06:50:54', '2022-05-29 06:50:54', NULL, 1),
(2, 'CL1000B', 'Crazy Lola 1 Litro botella', NULL, '1.00', 1.20, '2022-07-22', '2022-05-26 18:51:27', '2022-05-29 06:51:30', '2022-05-29 06:51:30', NULL, 2),
(3, 'CL1500B', 'Crazy Lola 1.5 Litros botella', NULL, '2.00', 1.50, '2022-05-28', NULL, '2022-05-29 06:52:56', '2022-05-29 06:52:56', NULL, 3),
(4, 'LS0355L', 'Lola Shampan 355 mL Lata', NULL, '0.22', 0.20, '2022-05-28', NULL, '2022-05-29 06:54:49', '2022-05-29 06:54:49', NULL, 3),
(5, 'LS1000B', 'Lola Shampan 1 Litro botella', NULL, '1.25', 1.20, NULL, NULL, '2022-05-29 06:55:29', '2022-05-29 06:55:29', NULL, 2),
(6, 'LS1500L', 'Lola Shampan 1.5 Litros botella', NULL, '2.50', 1.50, '2022-08-26', '2022-05-10 13:59:31', '2022-05-29 06:56:37', '2022-05-29 06:56:37', NULL, 1);

INSERT INTO `inventories` (`id`, `quantity`, `created_at`, `updated_at`, `deleted_at`, `store_id`, `product_id`) VALUES
(1, 1200.00, '2022-05-29 06:57:16', '2022-05-29 06:57:16', NULL, 1, 1),
(2, 875.00, '2022-05-29 06:57:30', '2022-05-29 06:59:12', NULL, 2, 3),
(3, 345.00, '2022-05-29 06:57:40', '2022-05-29 06:57:40', NULL, 1, 3),
(4, 580.00, '2022-05-29 06:57:52', '2022-05-29 06:57:52', NULL, 3, 5),
(5, 250.00, '2022-05-29 06:58:02', '2022-05-29 06:58:02', NULL, 2, 2),
(6, 600.00, '2022-05-29 06:59:46', '2022-05-29 06:59:46', NULL, 1, 4),
(7, 200.00, '2022-05-29 07:00:30', '2022-05-29 07:00:30', NULL, 3, 2),
(8, 5000.00, '2022-05-29 07:01:01', '2022-05-29 07:01:01', NULL, 4, 1),
(9, 3450.00, '2022-05-29 07:01:09', '2022-05-29 07:01:09', NULL, 4, 2),
(10, 1900.00, '2022-05-29 07:01:18', '2022-05-29 07:01:18', NULL, 4, 3),
(11, 4300.00, '2022-05-29 07:01:37', '2022-05-29 07:01:37', NULL, 4, 4),
(12, 2450.00, '2022-05-29 07:01:50', '2022-05-29 07:01:50', NULL, 4, 5);

INSERT INTO `users` (`id`, `dui`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `remember_token`, `hire_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '03245343-5', 'Carlos', 'Ancelópez', 'c.ancelopez@dosvolcanes.com.gt', NULL, '$2y$10$quar.JoVnE/isaKBVxqoOekZ7QaaOUX34Ou6KWF.1.P/D.bMpHEWm', NULL, '2018-07-21', '2022-05-29 07:08:03', '2022-05-29 07:08:03', NULL),
(3, '02784732-2', 'Karina', 'Benzemartínez', 'k.benzemartinez@disthond.com.hn', NULL, '$2y$10$szxsfH1aHYdPT.gOaufADeulFqAqTivFsLFTE2RCZwqitX1qoGp/y', NULL, '2019-10-25', '2022-05-29 07:09:49', '2022-05-29 07:09:49', NULL);
COMMIT;

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 2),
(3, 2);

INSERT INTO `order_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nueva', '2022-05-27 09:42:08', '2022-05-27 09:42:08', NULL),
(2, 'En preparación', '2022-05-29 07:02:53', '2022-05-29 07:02:53', NULL),
(3, 'Despachada', '2022-05-29 07:03:11', '2022-05-29 07:03:11', NULL),
(4, 'Cerrada', '2022-05-29 07:03:24', '2022-05-29 07:03:24', NULL),
(5, 'Cancelada', '2022-05-29 07:03:29', '2022-05-29 07:03:29', NULL);

INSERT INTO `orders` (`id`, `order_date`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `distributor_id`, `status_id`) VALUES
(1, '2022-05-25', '2022-05-29 07:15:10', '2022-05-29 07:15:10', NULL, 2, 1, 1),
(2, '2022-05-27', '2022-05-29 07:15:20', '2022-05-29 07:26:42', NULL, 3, 2, 3),
(3, '2022-05-20', '2022-05-29 07:15:27', '2022-05-29 07:15:27', NULL, 2, 1, 4),
(4, '2022-05-04', '2022-05-29 07:15:34', '2022-05-29 07:15:34', NULL, 2, 1, 2),
(5, '2022-05-19', '2022-05-29 07:15:46', '2022-05-29 07:15:46', NULL, 2, 2, 5),
(6, '2022-05-05', '2022-05-29 07:16:48', '2022-05-29 07:16:48', NULL, 2, 2, 2),
(7, '2022-05-26', '2022-05-29 07:16:59', '2022-05-29 07:16:59', NULL, 2, 1, 5),
(8, '2022-05-24', '2022-05-29 07:17:17', '2022-05-29 07:26:32', NULL, 2, 1, 3),
(9, '2022-05-14', '2022-05-29 07:17:29', '2022-05-29 07:17:29', NULL, 3, 2, 1),
(10, '2022-05-23', '2022-05-29 07:17:40', '2022-05-29 07:17:52', NULL, 3, 2, 1);

INSERT INTO `order_items` (`id`, `unit_price`, `quantity`, `created_at`, `updated_at`, `deleted_at`, `order_id`, `product_id`) VALUES
(1, '0.22', 145.00, '2022-05-29 07:21:16', '2022-05-29 07:29:42', NULL, 2, 4),
(2, '2.00', 655.00, '2022-05-29 07:21:29', '2022-05-29 07:29:36', NULL, 2, 3),
(3, '2.00', 490.00, '2022-05-29 07:21:51', '2022-05-29 07:29:31', NULL, 3, 3),
(4, '1.00', 375.00, '2022-05-29 07:22:00', '2022-05-29 07:29:26', NULL, 4, 2),
(5, '0.25', 800.00, '2022-05-29 07:25:01', '2022-05-29 07:29:17', NULL, 1, 1),
(6, '1.25', 435.00, '2022-05-29 07:25:22', '2022-05-29 07:28:11', NULL, 1, 5),
(7, '2.00', 780.00, '2022-05-29 07:25:32', '2022-05-29 07:29:10', NULL, 4, 3),
(8, '1.25', 760.00, '2022-05-29 07:25:43', '2022-05-29 07:25:43', NULL, 4, 5),
(9, '1.25', 150.00, '2022-05-29 07:26:00', '2022-05-29 07:26:00', NULL, 2, 5),
(10, '0.25', 500.00, '2022-05-29 07:28:54', '2022-05-29 07:29:03', NULL, 5, 1);

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69);

COMMIT;
