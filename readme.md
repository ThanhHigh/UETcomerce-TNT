## TNT Shop (Magento framework)

- http://tnt-tmdt.site/
- http://tnt-tmdt.site/admin_h5zzli

### Giới thiệu : **https://github.com/ThanhHigh/UETcomerce-TNT.git**

## Contribute


-Tran Hau Nam

-Nguyen Duc Thanh

-Pham Thanh Tung


## Cài đặt ứng dụng

### Môi trường cần thiết
1: PHP 7.4

2: DOCKER

3: COMPOSER
### Các bước
1 Clone project 

```
git clone https://github.com/ThanhHigh/UETcomerce-TNT.git
```

2 Pull image docker

```
# Create a DNS host entry for the site:
echo "127.0.0.1 ::1 yoursite.test" | sudo tee -a /etc/hosts

# Start some containers, copy files to them and then restart the containers:
docker-compose -f docker-compose.yml up -d
bin/copytocontainer --all ## Initial copy will take a few minutes...

# Import existing database:
bin/mysql < backups/magento.sql

# Import app-specific environment settings:
bin/magento app:config:import

bin/restart
```

3 Build module

reindex cache: 
`bin/magento indexer:reindex`

flush cache: 
`bin/magento cache:flush`

build code: 
`bin/magento setup:update`


4: Tài khoản admin

```
username : admin
password : Admin@123
```




