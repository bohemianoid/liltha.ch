<?php



/**
 * This class defines the structure of the 'teacher' table.
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
class TeacherTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'liltha.map.TeacherTableMap';

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
        $this->setName('teacher');
        $this->setPhpName('Teacher');
        $this->setClassname('Teacher');
        $this->setPackage('liltha');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'ID', 'INTEGER', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 255, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 255, null);
        $this->addColumn('portrait_image', 'PortraitImage', 'VARCHAR', false, 255, null);
        $this->addColumn('bio', 'Bio', 'LONGVARCHAR', false, null, null);
        $this->addColumn('url', 'URL', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('LessonToTeacher', 'LessonToTeacher', RelationMap::ONE_TO_MANY, array('id' => 'fk_teacher', ), null, null, 'LessonToTeachers');
        $this->addRelation('Lesson', 'Lesson', RelationMap::MANY_TO_MANY, array(), null, null, 'Lessons');
    } // buildRelations()

} // TeacherTableMap
