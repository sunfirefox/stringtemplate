<?php
/*
 * [The "BSD licence"]
 * Copyright (c) 2003-2005 Terence Parr, 2010 Yauhen Yakimovich
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products
 *    derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR
 * IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 * NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
 * THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Antlr
 * @package   Antlr_StringTemplate
 * @author    Terence Parr
 * @author    Yauhen Yakimovich
 * @copyright 2003-2005 Terence Parr, 2010 Yauhen Yakimovich
 * @license   http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @link      http://www.stringtemplate.org/
*/
namespace Antlr\StringTemplate;

/**
 * All the info we need to track for a template defined in an interface
 *
 * @category  Antlr
 * @package   Antlr_StringTemplate
 * @author    Yauhen Yakimovich
 * @copyright 2003-2005 Terence Parr, 2010 Yauhen Yakimovich
 * @license   http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @link      http://www.stringtemplate.org/
 */
class TemplateDefinition
{
    /**
     * Template name
     *
     * @var string
     */
    public $name;

    /**
     * Formal arguments of the definition
     *
     * @var array
     */
    public $formalArgs;

    /**
     * Template definition is optional
     *
     * @var boolean
     */
    public $optional = false;

    /**
     * Constructor
     *
     * @param strign  $name
     * @param array   $formalArgs
     * @param boolean $optional
     *
     */
    public function __construct($name, $formalArgs, $optional)
    {
        $this->name = $name;
        $this->formalArgs = $formalArgs;
        $this->optional = $optional;
    }
}

