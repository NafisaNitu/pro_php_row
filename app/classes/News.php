<?php


namespace App\classes;


class News
{
    public $allNews;
    public $result = [];

    public function index(){
        return [
            0=> [
                'id' => 1,
                'title_id' =>1,
                'name' => 'যুক্তরাষ্ট্রে খ্যাপাটে যাত্রীর জন্য উড়োজাহাজের জরুরি অবতরণ',
                'description' => 'যুক্তরাষ্ট্রে খ্যাপাটে যাত্রীর জন্য উড়োজাহাজের জরুরি অবতরণ দক্ষিণ কোরিয়ার সেনাবাহিনী বলেছে, আজ রোববার আরও একটি ক্ষেপণাস্ত্র ছুড়েছে উত্তর কোরিয়া। এ নিয়ে চলতি মাসে সপ্তমবারের মতো ক্ষেপণাস্ত্র পরীক্ষা চালাল দেশটি। খবর বার্তা সংস্থা এএফপির।',
                'image' => 'assets/img/45.jpg'
            ],
            1=> [
                'id' => 2,
                'title_id' =>3,
                'name' => 'গুমের ১৭ অভিযোগ খতিয়ে দেখল জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও',
                'description' => 'গুমের ১৭ অভিযোগ খতিয়ে দেখল জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও গুমের ১৭ অভিযোগ খতিয়ে দেখল জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও',
                'image' => 'assets/img/67.jpg'
            ],
            2=> [
                'id' => 3,
                'title_id' =>2,
                'name' => 'বেচাবিক্রি সবই চললেও ‘ভ্যালেন্টাইন ডে’ বলছে না সৌদি আরবত',
                'description' => 'বেচাবিক্রি সবই চললেও ‘ভ্যালেন্টাইন ডে’ বলছে না সৌদি আরবত বেচাবিক্রি সবই চললেও ‘ভ্যালেন্টাইন ডে’ বলছে না সৌদি আরবত বেচাবিক্রি সবই চললেও ‘ভ্যালেন্টাইন ডে’ বলছে না সৌদি আরবত',
                'image' => 'assets/img/55.jpg'
            ],
            3=> [
                'id' => 4,
                'title_id' =>2,
                'name' => 'পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা',
                'description' => 'পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা',
                'image' => 'assets/img/22.png'
            ],
            4=> [
                 'id' => 5,
                'title_id' =>1,
                'name' => 'ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত',
                'description' => 'ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত',
                'image' => 'assets/img/50.jpg'
            ],
            5=> [
                'id' => 6,
                'title_id' =>3,
                'name' => 'ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে',
                'description' => 'ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে',
                'image' => 'assets/img/66.png'
            ],
            6=> [
                'id' => 7,
                'title_id' =>1,
                'name' => 'ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত',
                'description' => 'ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে',
                'image' => 'assets/img/1.jpg'
            ],
            7=> [
                'id' => 6,
                'title_id' =>2,
                'name' => 'জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও',
                'description' => 'জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও',
                'image' => 'assets/img/34.jpg'
            ],
            8=> [
                'id' => 6,
                'title_id' =>3,
                'name' => 'অভিযোগ তুলে পিটিয়ে হত্যা পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা',
                'description' => 'অভিযোগ তুলে পিটিয়ে হত্যা পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা অভিযোগ তুলে পিটিয়ে হত্যা পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা অভিযোগ তুলে পিটিয়ে হত্যা পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা',
                'image' => 'assets/img/33.jpg'
            ],
        ];
    }


    public function showNews($titleId)
    {
        $this->allNews = $this->index();
        foreach ($this->allNews as $news)
        {
            if ($news['title_id'] == $titleId)
            {
                array_push($this->result, $news);
            }
        }
        return $this->result;
    }



}



//    public function getProductDetails($productId)
//    {
//        $this->allProducts = $this->index();
//        foreach ($this->allProducts as $product)
//        {
//            if ($product['id'] == $productId)
//            {
//                return $product;
//            }
//        }
//    }
