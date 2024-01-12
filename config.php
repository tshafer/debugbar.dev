<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Rails debugbar',
    'description' => 'Rails debugging dev tools for faster development',
    'githubRepo' => 'https://github.com/julienbourdeau/debugbar',
    'navigation' => require_once('navigation.php'),
    'collections' => [
        'docs' => [
            'path' => 'docs/{slug}',
            'extends' => '_layouts.docs',
            'section' => 'content',
            'map' => function ($post) {
                return App\DocPage::fromItem($post);
            },
        ],
    ],
    'activePage' => function ($page, $section, $mode = 'contains'): bool {
        // $path = ltrim($page->getPath(), '/');
        $path = $page->getPath();
        $cb = match ($mode) {
            'exact' => fn ($s) => $path === $s,
            'contains' => fn ($s) => Str::contains($path, $s),
            'starts_with' => fn ($s) => str_starts_with($path, $s),
        };

        return collect($section)->contains($cb);
    },
    'getDocsToc' => function ($page) {
        global $docsToc;

        return clone $docsToc;
    },
];
