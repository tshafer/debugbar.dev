---
slug: "logs"
toc_section: "Features"
title: 'Logs (next)'
subtitle: "Same as Rails.logger, but per request"
seo_title: 
seo_description: 
disabled: true
---

If you're used to tail the logs, you'll love this feature. It's the same logs, but per request and easily accessible.

In a typical setup, you might have background job running while the frontend just made 3 requests. The logs are all entangled together, and it's not necessarly easy to find what you're looking for.

The debugbar will let you see the logs for each request, and even filter them by level.

By default, all logs are displayed. You can add a minimum level in the configuration to ignore logs below that level.

```ruby
Debugbar.configure do |config|
  config.min_log_level = ::Logger::Severity::WARN
end
```
