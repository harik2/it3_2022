select first_name||' '|| last_name as "nom complet", salary , commission_pct , salary + salary * nvl(commission_pct,0) as salaire_net from employees 
where commission_pct  is not   null
select * from employees
les 5 fonctions de groupe (agregation) : count(*), max(salary),min(salary),sum(salary), avg(salary) :
nombre d'employe, somme des salaire POUR CHAQUE (PAR) metier (JOB_ID)
select job_id,count(*) as nombre_employe, sum(salary) as "masse salariale", max(salary) , min(salary),avg(salary) from employees
group by job_id


-- le salaire max par departement_id 
select max(salary) from employees 
group by department_id

select job_id, count(*) 
from employees 
where salary between 1000 and 30000
group by job_id
having count(*)>10 
order by job_id desc 

-- les sous requetes (subqueries) les requetes imbriquees

select * from employees where salary= (select max(salary) from employees ) 
-- les operateurs ensemblistes : all, any , in , not in
liste des employes ayant un salaire > au salaire d'employe en IT_PROG et ne travaillant pas dans l'it_prog
select * from employees where salary >= all (select salary from employees)
select * from employees where salary > any (select salary from employees where job_id='IT_PROG') and job_id <> 'IT_PROG'
-- les employees ayant un salaire > au salaire de Lisa Ozer et inferieur aux salaires de ceux qui travaillent dans le dep_id=80 
select * from employees where salary > (select salary from employees where first_name='Lisa' and last_name='Ozer') 
and salary > all (select salary from employees where department_id=80) 

-- les jointures internes (equi-jointure) jointure naturelle
select * from departments
select first_name,last_name,department_name from employees , departments 
where employees.department_id=departments.department_id 

select * from locations
select e.first_name,e.last_name,d.department_name from employees e join  departments d on e.department_id=d.department_id 
where d.department_name='IT'

select e.* , l.city  from employees e 
join departments d on e.department_id=d.department_id
join locations l on d.location_id=l.location_id
where l.city='Seattle'
and e.salary >=(select avg(e.salary)  from employees e 
join departments d on e.department_id=d.department_id
join locations l on d.location_id=l.location_id
where l.city='Seattle'
 )


1-- liste des employees  qui travaillent aux US (country_id) et ayant un salaire > salaire moyen des employees de l'IT_PROG (JOB_ID)
select e.*   from employees e 
join departments d on e.department_id=d.department_id
join locations l on d.location_id=l.location_id
where l.country_id='US'
and e.salary >(select avg(salary) from employees where job_id='IT_PROG')
2-- liste des villes ou se trouvent des employees n'ayant pas de commission 



os4