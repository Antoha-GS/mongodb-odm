<?php

declare(strict_types=1);

namespace Documents\Functional;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\EmbeddedDocument */
class EmbeddedWhichReferences
{
    /** @ODM\ReferenceOne(targetDocument="Reference", name="reference_doc") */
    public $referencedDoc;

    /** @ODM\ReferenceMany(targetDocument="Reference", name="reference_docs") */
    public $referencedDocs = [];
}
