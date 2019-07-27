<?php
class newsController{

	/*
	form example

	<input type="text" name="title[]" value="{{ $additional->title }}">
	<textarea name="body[]">{{ $additional->body }}</textarea>
	*/

	public function update(Request $request){
		
		foreach($request->additional_news_ids as $key => $additional_news_id){
			$additional_news = AdditionalNews::find($additional_news_id);
			$additional_news->title = $request->title[$key];
			$additional_news->body = $request->body[$key];
			$additional_news->save();
		}
	}
}
