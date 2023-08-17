<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->UserSeeder();
        $this->CategorySeeder();
        $this->CustomerSeeder();
        $this->ProductSeeder();
    }

    public function UserSeeder()
    {
        $user = new User();
        $user->name = "Loc";
        $user->username  = "Loc123";
        $user->email = "loc@gmail.com";
        $user->password = bcrypt(123456);
        $user->photo = 'Screenshot 2023-08-16 102203.png';
        $user->save();

        $user = new User();
        $user->name = "Hoai";
        $user->username  = "Hoai123";
        $user->email = "hoai@gmail.com";
        $user->password = bcrypt(123456);
        $user->photo = 'Screenshot 2023-08-16 102203.png';
        $user->save();

        $user = new User();
        $user->name = "Tuan";
        $user->username  = "Tuan123";
        $user->email = "tuan@gmail.com";
        $user->password = bcrypt(123456);
        $user->photo = 'Screenshot 2023-08-16 102203.png';
        $user->save();
    }

    public function CategorySeeder() {
        $cate = new Category();
        $cate->catName = 'PC';
        $cate->catSlug = '1';
        $cate->catDescriptions = 'PC SHOP';
        $cate->catSubID = '1';
        $cate->catParentID = '1';
        $cate->save();

        $cate = new Category();
        $cate->catName = 'Linh Kiện PC';
        $cate->catSlug = '1';
        $cate->catDescriptions = 'Linh Kiện PC SHOP';
        $cate->catSubID = '1';
        $cate->catParentID = '1';
        $cate->save();

        $cate = new Category();
        $cate->catName = 'Màn Hình';
        $cate->catSlug = '1';
        $cate->catDescriptions = 'Màn Hình SHOP';
        $cate->catSubID = '1';
        $cate->catParentID = '1';
        $cate->save();

        $cate = new Category();
        $cate->catName = 'Bàn Phím';
        $cate->catSlug = '1';
        $cate->catDescriptions = 'Bàn Phím SHOP';
        $cate->catSubID = '1';
        $cate->catParentID = '1';
        $cate->save();

        $cate = new Category();
        $cate->catName = 'Chuột - Lót Chuột';
        $cate->catSlug = '1';
        $cate->catDescriptions = 'Chuột - Lót Chuột SHOP';
        $cate->catSubID = '1';
        $cate->catParentID = '1';
        $cate->save();

        $cate = new Category();
        $cate->catName = 'Tai Nghe - Loa';
        $cate->catSlug = '1';
        $cate->catDescriptions = 'Tai Nghe - Loa SHOP';
        $cate->catSubID = '1';
        $cate->catParentID = '1';
        $cate->save();

        $cate = new Category();
        $cate->catName = 'LAPTOP';
        $cate->catSlug = '1';
        $cate->catDescriptions = 'LAPTOP SHOP';
        $cate->catSubID = '1';
        $cate->catParentID = '1';
        $cate->save();
    }

    public function CustomerSeeder() {
        $customer = new Customer();
        $customer->name = 'Phi';
        $customer->email = 'phi@gmail.com';
        $customer->phone = '0123456789';
        $customer->address = 'HCM';
        $customer->password = bcrypt(123456);
        $customer->save();

        $customer = new Customer();
        $customer->name = 'khang';
        $customer->email = 'khang@gmail.com';
        $customer->phone = '0123456789';
        $customer->address = 'HCM';
        $customer->password = bcrypt(123456);
        $customer->save();
    }

    public function ProductSeeder() {
        $product = new Product();
        $product->productName = 'bàn phím cơ';
        $product->productSlug = 'bàn phím cơ';
        $product->productPrice = 5000000;
        $product->productDetails = 'bàn phím cơ';
        $product->productImage = 'banphimco.jpg';
        $product->productQuantity = 10;
        $product->category_id  = 4;
        $product->save();

        $product = new Product();
        $product->productName = 'PC 07';
        $product->productSlug = 'PC 07';
        $product->productPrice = 50000000;
        $product->productDetails = 'PC 07';
        $product->productImage = 'PC07.jpg';
        $product->productQuantity = 10;
        $product->category_id  = 1;
        $product->save();

        $product = new Product();
        $product->productName = 'Ram 8G';
        $product->productSlug = 'Ram 8G';
        $product->productPrice = 5000000;
        $product->productDetails = 'Ram 8G';
        $product->productImage = 'ram8g.jpg';
        $product->productQuantity = 10;
        $product->category_id  = 2;
        $product->save();

        $product = new Product();
        $product->productName = 'Màn Hình LG';
        $product->productSlug = 'Màn Hình LG';
        $product->productPrice = 5000000;
        $product->productDetails = 'Màn Hình LG';
        $product->productImage = 'manhinhLG.jpg';
        $product->productQuantity = 10;
        $product->category_id  = 3;
        $product->save();

        $product = new Product();
        $product->productName = 'Chuột mistsu';
        $product->productSlug = 'Chuột mistsu';
        $product->productPrice = 5000000;
        $product->productDetails = 'Chuột mistsu';
        $product->productImage = 'chuotmistsu.jpg';
        $product->productQuantity = 10;
        $product->category_id  = 5;
        $product->save();

        $product = new Product();
        $product->productName = 'Tai nghe 007';
        $product->productSlug = 'Tai nghe 007';
        $product->productPrice = 5000000;
        $product->productDetails = 'Tai nghe 007';
        $product->productImage = 'Tainghe007.jpg';
        $product->productQuantity = 10;
        $product->category_id  = 6;
        $product->save();

        $product = new Product();
        $product->productName = 'Dell E3740';
        $product->productSlug = 'Dell E3740';
        $product->productPrice = 5000000;
        $product->productDetails = 'Dell E3740';
        $product->productImage = 'DellE3740.jpg';
        $product->productQuantity = 10;
        $product->category_id  = 7;
        $product->save();
    }
}
