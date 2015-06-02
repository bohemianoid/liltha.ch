<?php



/**
 * This class defines the structure of the 'course' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.liltha.map
 */
class CourseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'liltha.map.CourseTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('course');
        $this->setPhpName('Course');
        $this->setClassname('Course');
        $this->setPackage('liltha');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'ID', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Lesson', 'Lesson', RelationMap::ONE_TO_MANY, array('id' => 'fk_course', ), null, null, 'Lessons');
    } // buildRelations()

} // CourseTableMap
