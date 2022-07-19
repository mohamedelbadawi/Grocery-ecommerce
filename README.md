
# Grocey ecommerce web and app

it's a ecommerce website for selling Grocey products

## Live version

still working in frontend

>http://grocery-apid.herokuapp.com/api

>http://grocery-apid.herokuapp.com/admin

## API


```bash
  Accept-Language (ar,en) in header to set the Language of returned data 
```
>http://grocery-apid.herokuapp.com/api/products (get request)

### Get all products with all data
```bash
Arabic

"data": [
 {
            "id": 1,
            "name": "مشروم",
            "price": 2,
            "description": "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور\n\n                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد\n                                    \n                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات",
            "stock": 3,
            "category": "منتجات الالبان",
            "status": 1,
            "rate": 0,
            "images": [
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-3.png"
                },
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-1.png"
                },
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-3.png"
                },
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-6.png"
                }
            ]
        },
        ]

        

 English

"data": [
        {
            "id": 1,
            "name": "Mushroom",
            "price": 2,
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
            "stock": 3,
            "category": "Diary",
            "status": 1,
            "rate": 0,
            "images": [
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-3.png"
                },
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-1.png"
                },
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-3.png"
                },
                {
                    "image": "http://grocery-apid.herokuapp.com/assets/products/product-6.png"
                }
            ]
        },
```
#### Get product of speceifc category
>http://grocery-apid.herokuapp.com/api/products/category/2

#### Get single product
>http://grocery-apid.herokuapp.com/api/products/product/1
### Auth rotues for user
>http://grocery-apid.herokuapp.com/api/register

>http://grocery-apid.herokuapp.com/api/login

>http://grocery-apid.herokuapp.com/api/logout
##### Update password
>http://grocery-apid.herokuapp.com/api/user/password/update?oldPassword=123456789&newPassword=12345678

### Cart routes
the cart content is stored in database not in session to make user able to put products and use the website from mobile application and website too

User must be authenticated

>http://grocery-apid.herokuapp.com/api/cart 

>http://grocery-apid.herokuapp.com/api/cart/clear 

>http://grocery-apid.herokuapp.com//api/cart/add/product?product_id=2&quantity=10 

>http://grocery-apid.herokuapp.com/api/cart/remove/product?product_id=129

#### Get user addresses

>http://grocery-apid.herokuapp.com/api/address

#### to check out

>http://grocery-apid.herokuapp.com/api/checkout

#### to make a rate for a product
http://grocery-apid.herokuapp.com/api/product/2/rate



## Admin Dashboard

I used multi guard and made a seprated table for admins to make Auth

>http://grocery-apid.herokuapp.com/admin/login

![This is an image](https://raw.githubusercontent.com/mohamedelbadawi/Grocery-ecommerce/main/AdminDashboard.png)


- Arabic and English language
- Notifications for each created order implemented with queue to reduce time
- Extract data to many files such as `PDF , Excel ,CSV` 

# It still under development


