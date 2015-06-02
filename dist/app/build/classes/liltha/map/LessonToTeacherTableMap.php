<?php



/**
 * This class defines the structure of the 'lesson_to_teacher' table.
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
class LessonToTeacherTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'liltha.map.LessonToTeacherTableMap';

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
        $this->setName('lesson_to_teacher');
        $this->setPhpName('LessonToTeacher');
        $this->setClassname('LessonToTeacher');
        $this->setPackage('liltha');
        $this->setUseIdGenerator(false);
        $this->setIsCrossRef(true);
        // columns
        $this->addForeignPrimaryKey('fk_lesson', 'LessonID', 'INTEGER' , 'lesson', 'id', true, null, null);
        $this->addForeignPrimaryKey('fk_teacher', 'TeacherID', 'INTEGER' , 'teacher', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Lesson', 'Lesson', RelationMap::MANY_TO_ONE, array('fk_lesson' => 'id', ), null, null);
        $this->addRelation('Teacher', 'Teacher', RelationMap::MANY_TO_ONE, array('fk_teacher' => 'id', ), null, null);
    } // buildRelations()

} // LessonToTeacherTableMap
