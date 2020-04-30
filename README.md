## OKRの参考サイト
[OKRとは](https://www.kaonavi.jp/dictionary/okr/)

## TOPページの参考イメージ画像（上記サイトに掲載あるものです）
[VIEWの参考画像](https://gyazo.com/cad00082fd8d7366d53fdf4cad41389c)

## herokuへのデプロイ方法
[herokuへのデプロイ方法](https://docs.google.com/document/d/1qJ_VOCOTJnjaIoZblAKYiwJN43LHd2qO_JCf-WKQqjY/edit?usp=sharing)

DB

| Column | Type | 	Options |
|:-----------|:------------|:------------|
| ID      | bigIncrements    |     |
| objective     | string  |     |
| key_result       | string  |      |
| parent_id         | unsignedBigInteger  | nullable  |
| master_flag       | boolean  | efault(1)  |
| time_stamp    | timestamps  | timestamps  |
