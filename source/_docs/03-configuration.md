---
slug: configuration
toc_section: Getting Started
title: Configuration
subtitle: "Configure the Debugbar depending on your needs"
seo_title:
seo_description: 
---

There are a few things you can configure in the Debugbar. The configuration happens in two places:

* in `config/initializers/debugbar.rb` for the general gem configuration
* in a `script` tag in your page for some specific configuration


## Enable/disable the Debugbar

You can enable/disable the Debugbar by setting the `enabled` option in the initializer:

```ruby
Debugbar.configure do |config|
  config.enabled = false
end
```

## Ignoring requests

Once the debugbar is enabled, every request will be monitored and the debugbar will be displayed. You can ignore some requests by setting the `ignored_request` option in the initializer. This is typically useful to ignore some requests that are not relevant to you.

By default, the debugbar will ignore all requests starting with `/assets` or `/_debugbar`.

```ruby
Debugbar.configure do |config|
  # Ignore all requests starting with /admin
  config.ignored_request = -> (env) { env['PATH_INFO'].start_with? '/admin' }

  # Only log request to the API
  config.ignored_request = -> (env) { not env['PATH_INFO'].start_with? '/api/v1' }

  # Ignore requests to admin, assets and debugbar
  config.ignored_request = -> (env) do
    [Debugbar.config.prefix, "/assets", "/admin"].any? do |pfx|
      env['PATH_INFO'].start_with? pfx
    end
  end
end
```

## Using a different buffer

Whenever a request is made to the backend, the debugbar will store the data in a buffer. By default, the buffer is an in-memory buffer. You can use a different buffer by setting the `buffer_adapter` option in the initializer. So far, there is only a memory buffer and a `null` buffer.

A redis buffer is coming to support puma in cluster mode. Custom adapters will be available eventually.

```ruby
Debugbar.configure do |config|
  config.buffer_adapter = :memory  # Use a memory buffer
  config.buffer_adapter = :null    # Use a null buffer
end
```

## Enable/disable a feature

This is show in the [features](/docs/features) section, but generally, you can enable/disable a feature in the initializer.
By default, all features are enabled if the underlying module is available. For example, Active Record is enabled if the `ActiveRecord` module is available.

```ruby
Debugbar.configure do |config|
  config.active_record = false
  config.cache = true
end
```

## Using another prefix

All endpoints added by the debugbar are prefixed with `/_debugbar`.
It's unlikely that you'll need to change the prefix, but if you do, you can set the `prefix` option in the initializer.

```ruby
Debugbar.configure do |config|
  config.prefix = '/custom-prefix'
end
```
