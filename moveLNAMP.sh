#!/bin/bash
clear

hexo g
rm -rf /var/www/html/*
mv public/* /var/www/html/
