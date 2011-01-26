<?php

namespace Symfony\Component\DependencyInjection\Exception;

use \InvalidArgumentException as BaseInvalidArgumentException;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * InvalidArgumentException
 *
 * @author Bulat Shakirzyanov <bulat@theopenskyproject.com>
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements Exception
{
}
