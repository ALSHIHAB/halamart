<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = [
            'title' => [
                'en' => 'Insights. Ideas. Inspiration.',
                'ar' => 'اضاءات. افكار. الهام',
            ],
            'category_id' => 1,
            'excerpt_en' => 'Take your marketing further with Halamart. Think with Halamart.',
            'excerpt_ar' => 'هــلا مارت تأخذك الى عالم التجارة عبر الانترنت الى ابعد مدى',
            'content_en' => 'Those who have taken notes from the past two years of market disruptions know this: steady and nimble wins the race. To stay relevant and be prepared for what is next, knowing what people are prioritizing and what drives their interests is key, and for this, no guesswork is necessary.',
            'content_ar' => 'أولئك الذين أخذوا ملاحظات من العامين الماضيين من اضطرابات السوق يعرفون هذا: الثبات والذكاء يفوز بالسباق. للبقاء على صلة بالموضوع والاستعداد لما هو قادم ، فإن معرفة ما الذي يعطيه الناس الأولوية وما الذي يدفع اهتماماتهم أمر أساسي ، ولهذا ، لا داعي للتخمين.',
            'thumbnail' => 'blog/post1.jpg',
            'reads' => 217,
            'time_read' => '12.00',
        ];
        Blog::create($post1);

        $post2 = [
            'title' => [
                'en' => 'eCommerce Marketing',
                'ar' => 'التجارة الإلكترونية',
            ],
            'category_id' => 2,
            'excerpt_en' => 'E-commerce simply refers to the transactions in which individuals and businesses sell or purchase products over the Internet.',
            'excerpt_ar' => 'تشير التجارة الإلكترونية ببساطة إلى المعاملات التي يقوم فيها الأفراد والشركات ببيع أو شراء المنتجات عبر الإنترنت.',
            'content_en' => 'E-commerce simply refers to the transactions in which individuals and businesses sell or purchase products over the Internet. Those who have taken notes from the past two years of market disruptions know this: steady and nimble wins the race. To stay relevant and be prepared for what is next, knowing what people are prioritizing and what drives their interests is key, and for this, no guesswork is necessary.',
            'content_ar' => 'تشير التجارة الإلكترونية ببساطة إلى المعاملات التي يقوم فيها الأفراد والشركات ببيع أو شراء المنتجات عبر الإنترنت.',
            'thumbnail' => 'blog/post2.jpg',
            'reads' => 1256,
            'time_read' => '9.20',
        ];
        Blog::create($post2);

        $post3 = [
            'title' => [
                'en' => 'Despite the war’s conditions and difficulties, e-commerce is booming in Yemen',
                'ar' => 'رغم ظروف الحرب وصعوباتها.. ازدهار التجارة الإلكترونية في اليمن',
            ],
            'category_id' => 2,
            'excerpt_en' => 'E-commerce flourished in Yemen despite the conditions of war and the economic crisis, especially after the emergence of many applications specialized in buying and selling.',
            'excerpt_ar' => 'ازدهرت التجارة الإلكترونية في اليمن رغم ظروف الحرب والأزمة الاقتصادية، ولا سيما بعد ظهور العديد من التطبيقات المختصة بالبيع والشراء.',
            'content_en' => 'Despite this, there are a number of difficulties that stand in the way of this modern trade, such as those related to the deterioration of the Internet service and the weakness of the general culture of this medium and its role in life.
            In general, many factors, including the Corona pandemic, contributed to the emergence of e-commerce, albeit very slowly. However, this trade has become one of the main reasons for accelerating the buying and selling processes.',
            'content_ar' => 'رغم ذلك هناك عدد من الصعوبات التي تقف في طريق هذه التجارة الحديثة، كتلك المتعلقة بتردي خدمة الإنترنت وضعف الثقافة العامة بهذه الوسيلة ودورها في الحياة.
            وفي المجمل ساهمت الكثير من العوامل ومنها جائحة كورونا في ظهور التجارة الإلكترونية، ولو كان ذلك ببطء شديد. إلا أن هذه التجارة أصبحت واحدة من الأسباب الرئيسة في تسريع عمليات البيع والشراء.',
            'thumbnail' => 'blog/post3.jpg',
            'reads' => 3120,
            'time_read' => '13.50',
        ];
        Blog::create($post3);
    }
}