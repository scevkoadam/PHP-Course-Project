<?php
	function debug_g($param) {
		echo "<pre>";
		print_r($param);
		echo "</pre>";
	}

	function get_gallery_data() {
		return file_get_contents('data/galerija.txt');
	}


	function normalize_row_gallery_data($row_gallery_data) {
		$normalize_gallery_data = array("ID:", "ImeSlike:", "SlikaMala:", "SlikaVelika:");
		$row = str_replace($normalize_gallery_data, "", $row_gallery_data);
		$row = trim($row);
		return $row;
	}

	function normalize_gallery_data($data) {
		$exploded_gallery_data = explode('----', $data);
		unset($exploded_gallery_data[0]);
		//debug($exploded_gallery_data);exit;

		$new_gallery_data_formated = array();

		foreach($exploded_gallery_data as $gallery_row) {
			//debug_g($gallery_row); exit;
			$gallery_row_exploded = explode(PHP_EOL, $gallery_row);
			//debug($gallery_row_exploded);
			$gallery_row_exploded = array_filter($gallery_row_exploded);
			//debug_g($gallery_row_exploded);exit;
			
			$gallery_id = normalize_row_gallery_data($gallery_row_exploded[1]);
			$gallery_title = normalize_row_gallery_data($gallery_row_exploded[2]);
			$gallery_slikaMala = normalize_row_gallery_data($gallery_row_exploded[3]);
			$gallery_slikaVelika = normalize_row_gallery_data($gallery_row_exploded[4]);

			$row_gallery_data = array(
				"id" => $gallery_id,
				"title" => $gallery_title,
				"slikaMala" => $gallery_slikaMala,
				"slikaVelika" => $gallery_slikaVelika
			);
			$new_gallery_data_formated[] = $row_gallery_data;
			//debug_g($row_gallery_data);exit;
			//debug_g($new_gallery_data_formated);exit;
		}
		//debug_g($new_gallery_data_formated);exit;
		return $new_gallery_data_formated;
	}

	// function limit_text($text, $limit = 100) {
	// 	return substr($text, 0, $limit) . '...';
	// }

	function get_all_photos() {
		$photos_data = get_gallery_data();
		$photos_data = normalize_gallery_data($photos_data);
		return $photos_data;
	}

	// function get_last_news() {
	// 	$news_data = get_news_data();
	// 	$news_data = normalize_data($news_data);
	// 	//debug($news_data);exit;
	// 	return $news_data[0];
	// }


	function get_photos($gallery_id) {
		$photos = get_gallery_data();
		$photos = normalize_gallery_data($photos);
		foreach($photos as $photo_single) {
			if ($gallery_id == $photo_single['id']) {
				return $photo_single;
			}
		}
		return false;
	}
?>