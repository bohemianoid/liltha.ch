<?php


/**
 * Base class that represents a query for the 'lesson_to_teacher' table.
 *
 *
 *
 * @method LessonToTeacherQuery orderByLessonID($order = Criteria::ASC) Order by the fk_lesson column
 * @method LessonToTeacherQuery orderByTeacherID($order = Criteria::ASC) Order by the fk_teacher column
 *
 * @method LessonToTeacherQuery groupByLessonID() Group by the fk_lesson column
 * @method LessonToTeacherQuery groupByTeacherID() Group by the fk_teacher column
 *
 * @method LessonToTeacherQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LessonToTeacherQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LessonToTeacherQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LessonToTeacherQuery leftJoinLesson($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lesson relation
 * @method LessonToTeacherQuery rightJoinLesson($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lesson relation
 * @method LessonToTeacherQuery innerJoinLesson($relationAlias = null) Adds a INNER JOIN clause to the query using the Lesson relation
 *
 * @method LessonToTeacherQuery leftJoinTeacher($relationAlias = null) Adds a LEFT JOIN clause to the query using the Teacher relation
 * @method LessonToTeacherQuery rightJoinTeacher($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Teacher relation
 * @method LessonToTeacherQuery innerJoinTeacher($relationAlias = null) Adds a INNER JOIN clause to the query using the Teacher relation
 *
 * @method LessonToTeacher findOne(PropelPDO $con = null) Return the first LessonToTeacher matching the query
 * @method LessonToTeacher findOneOrCreate(PropelPDO $con = null) Return the first LessonToTeacher matching the query, or a new LessonToTeacher object populated from the query conditions when no match is found
 *
 * @method LessonToTeacher findOneByLessonID(int $fk_lesson) Return the first LessonToTeacher filtered by the fk_lesson column
 * @method LessonToTeacher findOneByTeacherID(int $fk_teacher) Return the first LessonToTeacher filtered by the fk_teacher column
 *
 * @method array findByLessonID(int $fk_lesson) Return LessonToTeacher objects filtered by the fk_lesson column
 * @method array findByTeacherID(int $fk_teacher) Return LessonToTeacher objects filtered by the fk_teacher column
 *
 * @package    propel.generator.liltha.om
 */
abstract class BaseLessonToTeacherQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLessonToTeacherQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'liltha', $modelName = 'LessonToTeacher', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LessonToTeacherQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LessonToTeacherQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LessonToTeacherQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LessonToTeacherQuery) {
            return $criteria;
        }
        $query = new LessonToTeacherQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$fk_lesson, $fk_teacher]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   LessonToTeacher|LessonToTeacher[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LessonToTeacherPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LessonToTeacherPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 LessonToTeacher A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `fk_lesson`, `fk_teacher` FROM `lesson_to_teacher` WHERE `fk_lesson` = :p0 AND `fk_teacher` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new LessonToTeacher();
            $obj->hydrate($row);
            LessonToTeacherPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return LessonToTeacher|LessonToTeacher[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|LessonToTeacher[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return LessonToTeacherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LessonToTeacherPeer::FK_LESSON, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LessonToTeacherPeer::FK_TEACHER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LessonToTeacherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LessonToTeacherPeer::FK_LESSON, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LessonToTeacherPeer::FK_TEACHER, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the fk_lesson column
     *
     * Example usage:
     * <code>
     * $query->filterByLessonID(1234); // WHERE fk_lesson = 1234
     * $query->filterByLessonID(array(12, 34)); // WHERE fk_lesson IN (12, 34)
     * $query->filterByLessonID(array('min' => 12)); // WHERE fk_lesson >= 12
     * $query->filterByLessonID(array('max' => 12)); // WHERE fk_lesson <= 12
     * </code>
     *
     * @see       filterByLesson()
     *
     * @param     mixed $lessonID The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonToTeacherQuery The current query, for fluid interface
     */
    public function filterByLessonID($lessonID = null, $comparison = null)
    {
        if (is_array($lessonID)) {
            $useMinMax = false;
            if (isset($lessonID['min'])) {
                $this->addUsingAlias(LessonToTeacherPeer::FK_LESSON, $lessonID['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lessonID['max'])) {
                $this->addUsingAlias(LessonToTeacherPeer::FK_LESSON, $lessonID['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LessonToTeacherPeer::FK_LESSON, $lessonID, $comparison);
    }

    /**
     * Filter the query on the fk_teacher column
     *
     * Example usage:
     * <code>
     * $query->filterByTeacherID(1234); // WHERE fk_teacher = 1234
     * $query->filterByTeacherID(array(12, 34)); // WHERE fk_teacher IN (12, 34)
     * $query->filterByTeacherID(array('min' => 12)); // WHERE fk_teacher >= 12
     * $query->filterByTeacherID(array('max' => 12)); // WHERE fk_teacher <= 12
     * </code>
     *
     * @see       filterByTeacher()
     *
     * @param     mixed $teacherID The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonToTeacherQuery The current query, for fluid interface
     */
    public function filterByTeacherID($teacherID = null, $comparison = null)
    {
        if (is_array($teacherID)) {
            $useMinMax = false;
            if (isset($teacherID['min'])) {
                $this->addUsingAlias(LessonToTeacherPeer::FK_TEACHER, $teacherID['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($teacherID['max'])) {
                $this->addUsingAlias(LessonToTeacherPeer::FK_TEACHER, $teacherID['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LessonToTeacherPeer::FK_TEACHER, $teacherID, $comparison);
    }

    /**
     * Filter the query by a related Lesson object
     *
     * @param   Lesson|PropelObjectCollection $lesson The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LessonToTeacherQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLesson($lesson, $comparison = null)
    {
        if ($lesson instanceof Lesson) {
            return $this
                ->addUsingAlias(LessonToTeacherPeer::FK_LESSON, $lesson->getID(), $comparison);
        } elseif ($lesson instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LessonToTeacherPeer::FK_LESSON, $lesson->toKeyValue('PrimaryKey', 'ID'), $comparison);
        } else {
            throw new PropelException('filterByLesson() only accepts arguments of type Lesson or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Lesson relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LessonToTeacherQuery The current query, for fluid interface
     */
    public function joinLesson($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Lesson');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Lesson');
        }

        return $this;
    }

    /**
     * Use the Lesson relation Lesson object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LessonQuery A secondary query class using the current class as primary query
     */
    public function useLessonQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLesson($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lesson', 'LessonQuery');
    }

    /**
     * Filter the query by a related Teacher object
     *
     * @param   Teacher|PropelObjectCollection $teacher The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LessonToTeacherQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTeacher($teacher, $comparison = null)
    {
        if ($teacher instanceof Teacher) {
            return $this
                ->addUsingAlias(LessonToTeacherPeer::FK_TEACHER, $teacher->getID(), $comparison);
        } elseif ($teacher instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LessonToTeacherPeer::FK_TEACHER, $teacher->toKeyValue('PrimaryKey', 'ID'), $comparison);
        } else {
            throw new PropelException('filterByTeacher() only accepts arguments of type Teacher or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Teacher relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LessonToTeacherQuery The current query, for fluid interface
     */
    public function joinTeacher($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Teacher');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Teacher');
        }

        return $this;
    }

    /**
     * Use the Teacher relation Teacher object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TeacherQuery A secondary query class using the current class as primary query
     */
    public function useTeacherQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTeacher($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Teacher', 'TeacherQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LessonToTeacher $lessonToTeacher Object to remove from the list of results
     *
     * @return LessonToTeacherQuery The current query, for fluid interface
     */
    public function prune($lessonToTeacher = null)
    {
        if ($lessonToTeacher) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LessonToTeacherPeer::FK_LESSON), $lessonToTeacher->getLessonID(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LessonToTeacherPeer::FK_TEACHER), $lessonToTeacher->getTeacherID(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
