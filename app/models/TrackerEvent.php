<?php
class TrackerEvent extends Eloquent {
	public $table = 'events';

	protected $guarded = array();

	public static $rules = array();

	public function type() {
		return $this->belongsTo('EventType');
	}
}
