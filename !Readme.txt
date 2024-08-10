The software is launched using the link http://find_keywords.ru/index.php 
Checked for PHP5.3, PHP8.0. 
When launched using the HTTP port number (for example, http://localhost:8000/), you should specify the port number (8000) in the keywords_parameters.php file. 

This script allows you to search by keywords among the files of the site's web pages, links to which are provided in the site map (Sitemap.xml file). The keywords must be contained in the meta tags of each file of the form: <meta name="keywords" content="word, word1, word2"/> 
To speed up the work, for you not to have to review all the web pages of the site each time, when you click the "Create a keyword file based on Sitemap.xml" button, a URL_keywords.csv file is created on the secret subdomain "secret", containing lists of links to the site files and the corresponding keywords. When changing keywords in any of the files and/or when changing the URL of web pages, adding new ones or deleting existing ones, you need to create a new keyword file. That is, this is essentially indexing keywords by the URL of the corresponding web pages (among those present in the sitemap file). 
Once the keyword file is created, you can search by keywords. To do this, enter the search keywords separated by spaces in the search area. The search results will be most relevant, firstly, to the number of keywords found in the corresponding web pages and, secondly, to the order of the keywords in the search area. For example, if you enter the following keywords: newspaper car shock absorber the following links to web pages will be shown: 
    http://www.4846d.ru/raznoe/amortizatory.html (car, shock absorber, car) 
    http://www.4846d.ru/raznoe/dudaev.html (Dudaev, Dzhokhar, newspaper, video, media) 
    http://www.4846d.ru/raznoe/akkumulatory.html (battery, car, car) 
1. That is, first of all, links to those web pages will be shown, among the keywords (in meta tags) of which there is the largest number of the searched keywords. In this case, the web page, having among the keywords the words "newspaper car", i.e. http://www.4846d.ru/raznoe/amortizatory.html. 
2. Secondly, links to web pages will be shown, the keywords of which correspond to the specified (during the search) keywords in the order of their sequence in the query string. In this case, this is a web page that has the word "newspaper" among the keywords, i.e. http://www.4846d.ru/raznoe/dudaev.html. 
3. And, finally, after these links, all other links corresponding to the keywords will be shown (taking into account point 2). To be able to search for fuzzy matches, the metaphone() function of the PHP language is used. 

If the site is implemented not on files, as in this software, but on databases (as is customary at present), then the script will have to be slightly modified to be able to obtain the content of web pages of the corresponding URLs from databases (and not from files).


������ �� ������������ ��� ������ ������ http://find_keywords.ru/index.php
��������� ������ � PHP5.3, PHP8.0.
��� ������� � �������������� ������ HTTP-����� (��������, http://localhost:8000/) ������� ������ ����� ����� (8000) � ����� keywords_parameters.php.

���� ������ ��������� ������ ����� �� �������� ������ ����� ������ ���������� �����, ������ �� ������� ��������� � ����� ����� (���� Sitemap.xml). �������� ����� ������ ����������� � ��������� ������� �� ������ ����: <meta name="keywords" content="�����, �����1, �����2"/>
��� ��������� ������, ����� ������ ��� �� ������������� ������ ��� ����������� �����, ��� ������� �� ������ "������� ���� �������� ���� �� ������ Sitemap.xml" �� ��������� ��������� secret ��������� ���� URL_keywords.csv, ���������� ������� ������ �� ����� ����� � ��������������� �������� �����. ��� ��������� �������� ���� � �����-���� �� ������ �/��� ��� ��������� URL ����������, ���������� ����� ��� �������� ��������� ����� ������� ���� �������� ���� ������. �.�. ���, �� ����, ���������� �������� ���� �� URL ��������������� ���������� (����� ���, ��� ������������ � ����� ����� �����). 
����� ���� �������� ���� ������, ����� ������ ����� �� �������� ������. ��� ����� � ������� ������ ����� ������ ������� �������� ����� ����� �������. ���������� ������ ����� �������� ����������, ��-������, ���������� �������� ����, ������������� � ��������������� ������������ �, ��-������, ������� ���������� �������� ���� � ������� ������. ��������, ���� ������ ����� �������� �����: 
������ ������ �����������
����� �������� ��������� ������ �� �����������:
    http://www.4846d.ru/raznoe/amortizatory.html (����������, �����������, ������)
    http://www.4846d.ru/raznoe/dudaev.html (������, ������, ������, �����, ���)
    http://www.4846d.ru/raznoe/akkumulatory.html (����������, ����������, ������)
1. �.�. � ������ ������� ����� �������� ������ �� �� �����������, ����� �������� ���� (� ���������) ������� ����������� ���������� ���������� ������� �������� ����. � ������ ������ �����������, ������� ����� �������� ���� ����� "������ ������", �.�. http://www.4846d.ru/raznoe/amortizatory.html.
2. �� ������ ������� ����� �������� ������ �� �����������, �������� ����� ������� ������������� �������� (��� ������) �������� ������ � ������� �� ����������� � ������ �������. � ������ ������ ��� �����������, ������� ����� �������� ���� ����� "������", �.�. http://www.4846d.ru/raznoe/dudaev.html.
3. �, �������, ����� ���� ������ ����� �������� ��� ��������� ������, ��������������� �������� ������ (� ������ �.2). 
��� ����������� ������ �� �������� ����������� ������������ ������� metaphone() ����� ���.

���� ���� ���������� �� �� ������, ��� � ������ ��, � �� ����� ������ (��� ��� ������� � ��������� �����), �� ������ �������� ������� ����������, ����� ����� ���� �������� ���������� (�������) ���������� ��������������� URL �� ��� ������ (� �� �� ������).
