<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public $categories = [

        // incomes
        ['id' => 1, 'category_type' => 'income', 'name' => 'দুধ বিক্রি'],
        ['id' => 2, 'category_type' => 'income', 'name' => 'চামড়া বিক্রি'],
        ['id' => 3, 'category_type' => 'income', 'name' => 'বাছুর বিক্রি'],
        ['id' => 4, 'category_type' => 'income', 'name' => 'গোবর ও সার বিক্রি'],
        ['id' => 5, 'category_type' => 'income', 'name' => 'মুনাফা'],
        ['id' => 6, 'category_type' => 'income', 'name' => 'পশুখাদ্য বিক্রি'],
        ['id' => 7, 'category_type' => 'income', 'name' => 'প্রসাধনী পণ্য বিক্রি'],
        ['id' => 8, 'category_type' => 'income', 'name' => 'পরামর্শ ও প্রশিক্ষণ'],
        ['id' => 9, 'category_type' => 'income', 'name' => 'মাংস বিক্রি'],
        ['id' => 10, 'category_type' => 'income', 'name' => 'খুর ও লোম বিক্রি'],

        // expense
        ['id' => 1, 'category_type' => 'expense', 'name' => 'পশুখাদ্য'],
        ['id' => 2, 'category_type' => 'expense', 'name' => 'বিদ্যুৎ ও পানি বিল'],
        ['id' => 3, 'category_type' => 'expense', 'name' => 'চিকিৎসা খরচ'],
        ['id' => 4, 'category_type' => 'expense', 'name' => 'খামারের অবকাঠামো রক্ষণাবেক্ষণ'],
        ['id' => 5, 'category_type' => 'expense', 'name' => 'পশুখাদ্য সরবরাহকারী'],
        ['id' => 6, 'category_type' => 'expense', 'name' => 'পরিবহন খরচ'],
        ['id' => 7, 'category_type' => 'expense', 'name' => 'গোবর ব্যবস্থাপনা'],
        ['id' => 8, 'category_type' => 'expense', 'name' => 'বীমা'],
        ['id' => 9, 'category_type' => 'expense', 'name' => 'যন্ত্রপাতি ও সরঞ্জাম'],
        ['id' => 10, 'category_type' => 'expense', 'name' => 'কর্মচারীদের বেতন'],

        // income
        ['id' => 23, 'category_type' => 'income', 'name' => 'Bonus'],
    ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create($category);
        }
    }
}
