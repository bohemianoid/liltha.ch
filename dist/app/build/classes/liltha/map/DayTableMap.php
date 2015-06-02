<?php



/**
 * This class defines the structure of the 'day' table.
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
class DayTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'liltha.map.DayTableMap';

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
        $this->setName('day');
        $this->setPhpName('Day');
        $this->setClassname('Day');
        $this->setPackage('liltha');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'ID', 'INTEGER', true, null, null);
        $this->addColumn('shorthand', 'Shorthand', 'VARCHAR', true, 2, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Lesson', 'Lesson', RelationMap::ONE_TO_MANY, array('id' => 'fk_day', ), null, null, 'Lessons');
    } // buildRelations()

} // DayTableMap
