<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function getAllPost()
    {
        return [
            [
                'id' => 1,
                'slug' => 'test-article-1',
                'title' => 'Test Article 1',
                'author' => 'Billy Jonathan',
                'date' => '01 September 2024',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu fermentum nibh. Nam non ante imperdiet, malesuada velit nec, euismod tellus. Proin tortor ante, auctor quis porttitor eu, varius sed risus. Curabitur facilisis elit mi, quis maximus ligula dignissim sit amet. Maecenas sit amet tincidunt libero, eget tempus turpis. Vivamus sit amet orci massa. In at lacinia sapien. Sed tincidunt magna ex, vitae vestibulum mauris hendrerit et. Fusce turpis lectus, semper ut nisi eu, volutpat lacinia nisi. Sed eu nunc in quam bibendum molestie id ut enim. Etiam commodo semper ex, quis porttitor lacus placerat at. Integer ac feugiat augue, sodales laoreet metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam scelerisque turpis non turpis gravida, a venenatis eros efficitur. Vivamus aliquam rutrum ex, quis dapibus erat ultricies ac.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vestibulum tortor a iaculis vestibulum. Nullam a nulla at lacus hendrerit convallis vitae sed augue. Duis velit dolor, commodo eu dui ut, ullamcorper elementum sem. Curabitur sem justo, tincidunt at dictum faucibus, commodo ac urna. Sed tincidunt finibus laoreet. Nam tristique lacus ut urna varius fringilla. Nam sit amet ornare erat. Duis cursus est dui, non lacinia lacus faucibus in. Nullam non tortor eu nulla mattis dignissim. Fusce in consectetur massa. Fusce mollis libero eget velit facilisis, eu elementum ligula ornare. Cras facilisis finibus pretium."
            ],
            [
                'id' => 2,
                'slug' => 'test-article-2',
                'title' => 'Test Article 2',
                'author' => 'Billy Jonathan',
                'date' => '05 September 2024',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae lectus scelerisque hendrerit. Pellentesque lobortis turpis non tellus eleifend, ut tincidunt orci dictum. Quisque ut sodales enim. Donec et finibus erat. In non nibh id nisl pellentesque laoreet. Integer vehicula, sem sed imperdiet convallis, ligula metus luctus lacus, tempus placerat eros nunc vitae orci. Sed at dapibus dui. Pellentesque pharetra lacinia nisi et eleifend. Maecenas a volutpat nunc. Nunc a eros pellentesque nibh cursus blandit. Nam aliquet nunc ut massa pulvinar lobortis. Vestibulum dapibus magna eu leo posuere, eget laoreet justo finibus. Nam laoreet posuere tincidunt. Fusce id malesuada libero. Aliquam sed felis ut eros molestie eleifend ac pretium augue.

Donec hendrerit, orci sit amet luctus mollis, metus est vehicula sapien, quis rhoncus purus neque eget mauris. Donec odio ipsum, rutrum ac hendrerit nec, tristique ac elit. In ut lobortis felis. Aenean porta, leo sed semper commodo, dolor ante mattis libero, eu feugiat ligula dui et sapien. Integer dictum, felis a congue ullamcorper, enim augue faucibus magna, ut iaculis risus massa aliquet nisi. Nullam pellentesque tincidunt semper. Phasellus elementum dictum congue. Phasellus mi magna, vehicula ut sodales quis, porttitor ac odio. Aenean tortor nulla, malesuada nec cursus feugiat, sagittis vel orci. Vivamus condimentum ipsum a ligula commodo, eget hendrerit elit imperdiet.'
            ]
        ];
    }

    public static function find($slug)
    {
        $post = Arr::first(static::getAllPost(), fn ($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }
        return($post);
    }
}