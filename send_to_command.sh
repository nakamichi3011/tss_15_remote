#!/bin/sh

# 第一引数にファイルパスを指定します

# www-dataユーザー用に赤外線ツールへのパスを通す (Python使う場合も同様)
export PATH=$PATH:/usr/local/bin/

# 赤外線用の処理を実行
bto_advanced_USBIR_cmd -d `cat $1`