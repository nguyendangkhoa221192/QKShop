<?php
/**
 * GET service class application singleton be assign if have
 *
 * @param string $name
 * @return class object
 */
function getService($name)
{
	if (app()->has($name)) {
		return app()->make($name);
	}

	return null;
}