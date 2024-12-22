## Laptop Shop24h (Magento framework)

- https://shop24h.website/
- https://shop24h.website/admin

### web giới thiệu : **https://pqthinh.github.io/magento/**

## Contribute


-[Hoang Van Giap](https://github.com/giapdz): Cài đặt + deploy + module thanh toán + thời tiết + tiền tệ  + tin tức + admin cloud 

-[Nguyen Duc Khoi](https://www.facebook.com/duckhoi.uet) : change theme + add product + viết tài liệu

-[Pham Quang Thinh](https://github.com/pqthinh) : init project + Cài đặt + deploy + module chat + git manager


## Cài đặt ứng dụng

### Môi trường cần thiết
1: PHP 7.4

2: DOCKER

3: COMPOSER
### Các bước
1 Clone project 

```
git clone https://github.com/pqthinh/magento.git
cd magento
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

3 Phát triển module

reindex cache: 
`bin/magento indexer:reindex`

flush cache: 
`bin/magento cache:flush`

build code: 
`bin/magento setup:update`


4: Tài khoản admin

```
username : admin
password : admin123
```

## Reporting bugs

You found a bug? Please report it to our [shop24h](https://www.facebook.com/pqthinh.uet/). Thank you!


## Contact

Here you can find our [shop24h](https://www.facebook.com/pqthinh.uet/)

### Support or Contact

Having trouble with Pages? Check out our [shop24h](https://www.facebook.com/pqthinh.uet/) or [pqthinh](https://www.facebook.com/pqthinh.uet/) and we’ll help you sort it out.

