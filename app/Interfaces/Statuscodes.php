<?php

namespace App\Interfaces;

 interface Statuscodes{
	const Okay = 200;

	const Created = 201;
	
	const NoContent = 204;

	const InvalidRequestFormat = 400;

	const ResourceNotFound = 404;

	const ServerError = 500;

	const ResourceAlreadyExists = 409;

	const Unauthorized = 401;

	const DeniedAccess = 403;
}

?>