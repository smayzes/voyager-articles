<?php

namespace Codelabs\VoyagerArticles\Database\Seeds;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;
use Codelabs\VoyagerArticles\Models\Article;
use Codelabs\VoyagerArticles\Policies\ArticlePolicy;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = DataType::firstOrNew(['slug' => 'articles']);
        if (! $dataType->exists) {
            $dataType->fill([
                'name'                  => 'articles',
                'display_name_singular' => __('voyagerarticles::seeders.data_types.article.singular'),
                'display_name_plural'   => __('voyagerarticles::seeders.data_types.article.plural'),
                'icon'                  => 'voyager-documentation',
                'model_name'            => Article::class,
                'policy_name'           => ArticlePolicy::class,
                'controller'            => null,
                'generate_permissions'  => 1,
                'server_side'           => 1,
                'description'           => null,
            ])->save();
        }
    }
}
