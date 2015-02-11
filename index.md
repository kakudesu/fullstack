---
layout: page
title: Wecloeme!
---
{% include JB/setup %}

Welcome to  DingSoung's technology Blog

####Posts
<ul class="posts">
  {% for post in site.posts %}
    <li><span>{{ post.date | date_to_string }}</span> &raquo; <a href="{{ BASE_PATH }}{{ post.url }}">{{ post.title }}</a></li>
  {% endfor %}
</ul>

####Pages
<ul class="pages">
  {% for post in site.pages %}
    <li><span>{{ page.date | date_to_string }}</span> &raquo; <a href="{{ BASE_PATH }}{{ page.url }}">{{ page.title }}</a></li>
  {% endfor %}
</ul>

