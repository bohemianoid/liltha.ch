<?php



/**
 * This class defines the structure of the 'lesson' table.
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
class LessonTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'liltha.map.LessonTableMap';

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
        $this->setName('lesson');
        $this->setPhpName('Lesson');
        $this->setClassname('Lesson');
        $this->setPackage('liltha');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'ID', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_course', 'CourseID', 'INTEGER', 'course', 'id', true, null, null);
        $this->addForeignKey('fk_day', 'DayID', 'INTEGER', 'day', 'id', true, null, null);
        $this->addColumn('time_start', 'TimeStart', 'VARCHAR', true, 5, null);
        $this->addColumn('time_end', 'TimeEnd', 'VARCHAR', true, 5, null);
        $this->addColumn('period_start', 'PeriodStart', 'VARCHAR', true, 9, null);
        $this->addColumn('period_end', 'PeriodEnd', 'VARCHAR', false, 9, null);
        $this->addForeignKey('fk_place', 'PlaceID', 'INTEGER', 'place', 'id', true, null, null);
        $this->addColumn('price', 'Price', 'INTEGER', false, null, null);
        $this->addColumn('registration_url', 'RegistrationURL', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Course', 'Course', RelationMap::MANY_TO_ONE, array('fk_course' => 'id', ), null, null);
        $this->addRelation('Day', 'Day', RelationMap::MANY_TO_ONE, array('fk_day' => 'id', ), null, null);
        $this->addRelation('Place', 'Place', RelationMap::MANY_TO_ONE, array('fk_place' => 'id', ), null, null);
        $this->addRelation('LessonToTeacher', 'LessonToTeacher', RelationMap::ONE_TO_MANY, array('id' => 'fk_lesson', ), null, null, 'LessonToTeachers');
        $this->addRelation('Teacher', 'Teacher', RelationMap::MANY_TO_MANY, array(), null, null, 'Teachers');
    } // buildRelations()

} // LessonTableMap
