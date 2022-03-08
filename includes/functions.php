<?php
	function debug($param) {
		echo "<pre>";
		print_r($param);
		echo "</pre>";
	}


	function get_website_title() {
		global $_websiteTitle;
		echo $_websiteTitle;
	}

	
	function get_news_data() {
		return file_get_contents('data/news.txt');
	}


	function normalize_row_data($row_data) {
		$normalize_data = array("ID:", "Title:", "Datum:", "Slika:", "Tekst:");
		$row = str_replace($normalize_data, "", $row_data);
		$row = trim($row);
		return $row;
	}

	function normalize_data($data) {
		$exploded_data = explode('----', $data);
		unset($exploded_data[0]);
		//debug($exploded_data);exit;

		$new_data_formated = array();

		foreach($exploded_data as $news_row) {
			//debug($news_row);
			$news_row_exploded = explode(PHP_EOL, $news_row);
			//debug($news_row_exploded);
			$news_row_exploded = array_filter($news_row_exploded);
			//debug($news_row_exploded);exit;
			
			$news_id = normalize_row_data($news_row_exploded[1]);
			$news_title = normalize_row_data($news_row_exploded[2]);
			$news_date = normalize_row_data($news_row_exploded[3]);
			$news_img = normalize_row_data($news_row_exploded[4]);
			$news_text = normalize_row_data($news_row_exploded[5]);
			//debug(limit_text($news_text));exit;
			$row_data = array(
				"id" => $news_id,
				"title" => $news_title,
				"date" => $news_date,
				"img" => $news_img,
				"text" => $news_text,
				"short_text" => limit_text($news_text)
			);
			$new_data_formated[] = $row_data;
			//debug($row_data);exit;
		}
		//debug($new_data_formated);exit;
		return $new_data_formated;
	}

	function limit_text($text, $limit = 100) {
		return substr($text, 0, $limit) . '...';
	}

	function get_all_news() {
		$news_data = get_news_data();
		$news_data = normalize_data($news_data);
		return $news_data;
	}

	function get_last_news() {
		$news_data = get_news_data();
		$news_data = normalize_data($news_data);
		//debug($news_data);exit;
		return $news_data[0];
	}


	function get_news($news_id) {
		$news = get_all_news();
		foreach($news as $news_single) {
			if ($news_id == $news_single['id']) {
				return $news_single;
			}
		}
		return false;
	}
?>