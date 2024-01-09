@php
  $title = $page->seo_title ?? $page->description;
  $description = $page->seo_description ?? $page->description;
  $seoGraphImg = false; // TODO: Make beautiful SEO imae
  $canonicalUlr = $page->getUrl();
@endphp

<title>{{ $title }}</title>
<meta property="og:title" content="{{ $title }}" />

@isset($description)
  <meta name="description" content="{{ $description }}">
  <meta property="og:description" content="{{ $description }}" />
@endisset

<link rel="canonical" href="{{ $canonicalUlr }}"/>
<meta property="og:url" content="{{ $canonicalUlr }}" />

<meta name="twitter:creator" content="@julienbourdeau" />

@if($seoGraphImg)
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="image" content="{{ $seoGraphImg }}" />
  <meta itemprop="image" content="{{ $seoGraphImg }}" />
  <meta name="twitter:image" content="{{ $seoGraphImg }}" />
  <meta property="og:image" content="{{ $seoGraphImg }}" />
@endif
