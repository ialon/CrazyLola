--PRODUCTS

DELIMITER $$
CREATE TRIGGER update_products
    BEFORE update ON products
    FOR EACH ROW
BEGIN
	SET NEW.updated_at = SYSDATE();
    INSERT INTO product_logs(id,sku,status,name,description,unit_price,weight,due_date,production_date,created_at,updated_at,deleted_at) values(old.id,old.sku,old.status_id,old.name,old.description,old.unit_price,old.weight,old.due_date,old.production_date,old.created_at,new.updated_at,old.deleted_at);
END
$$


DELIMITER $$
CREATE TRIGGER delete_products
    BEFORE DELETE ON products
    FOR EACH ROW
BEGIN
    INSERT INTO product_logs(id,sku,status_id,name,description,unit_price,weight,due_date,production_date,created_at,updated_at,deleted_at) values(old.id,old.sku,old.status_id,old.name,old.description,old.unit_price,old.weight,old.due_date,old.production_date,old.created_at,old.updated_at,SYSDATE());
END
$$


--INVENTORY

DELIMITER $$
CREATE TRIGGER update_inventories
    BEFORE update ON inventories
    FOR EACH ROW
BEGIN
	SET new.updated_at = SYSDATE();
    INSERT INTO inventory_logs(inventory,quantity,store,product,created_at,updated_at,deleted_at) values(old.id,old.quantity,old.store_id,old.product_id,old.created_at,new.updated_at,old.deleted_at);
END;
$$


DELIMITER $$
CREATE TRIGGER delete_inventories
    BEFORE DELETE ON inventories
    FOR EACH ROW
BEGIN
    INSERT INTO inventory_logs(inventory,quantity,store,product,created_at,updated_at,deleted_at) values(old.id,old.quantity,old.store_id,old.product_id,old.created_at,old.updated_at,SYSDATE());
END
$$



--ORDERS

DELIMITER $$
CREATE TRIGGER update_orders
    BEFORE update ON orders
    FOR EACH ROW
BEGIN
	SET new.updated_at = SYSDATE();
    INSERT INTO order_logs(id,order_date,user,distributor,status,created_at,updated_at,deleted_at) values(old.id,old.order_date,old.user_id,old.distributor_id,old.status_id,old.created_at,new.updated_at,old.deleted_at);
END
$$


DELIMITER $$
CREATE TRIGGER delete_orders
    BEFORE DELETE ON orders
    FOR EACH ROW
BEGIN	
    INSERT INTO order_logs(id,order_date,user,distributor,status,created_at,updated_at,deleted_at) values(old.id,old.order_date,old.user_id,old.distributor_id,old.status_id,old.created_at,old.updated_at,SYSDATE());
END
$$


--get date function

CREATE Function fnDate(Y int, M int, D int)
returns datetime
AS
BEGIN 
    return dateadd(month,((Y-1900)*12)+M-1,D-1)
END

--get only date function
CREATE Function fnDateOnly(DT DateTime)
returns datetime
AS
BEGIN 
    return dateadd(dd,0, datediff(dd,0,DT))
END

--View  product
CREATE VIEW product_view as
select `id`, `sku`, `name`, `description`, `unit_price`, `weight`, `due_date`, `production_date`, `created_at`, `updated_at`, `deleted_at`, `status_id` from products


--View  inventory
CREATE VIEW inventories_view as
select `id`, `quantity`, `created_at`, `updated_at`, `deleted_at`, `store_id`, `product_id` from inventories

--View  orders
CREATE VIEW orders_view as
select `id`, `order_date`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `distributor_id`, `status_id` from orders

--View Expire product
CREATE VIEW expire_product as
select id,name,due_date from products where due_date<SYSDATE()