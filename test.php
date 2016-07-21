<?php
file_get_contents(
	'http://localhost:1234/some-path',
	null,
	stream_context_create(
		[
			'http' => [
				'method' => 'PATCH'
			]
		]
	)
);
file_get_contents(
	'http://localhost:1234/some-path',
	null,
	stream_context_create(
		[
			'http' => [
				'method' => 'XYZ_METHOD_ALSO_ALLOWED'
			]
		]
	)
);