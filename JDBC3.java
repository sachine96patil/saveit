// Programs to create Table ,VIEWS AND INDEX..
//Assignment No. 3 			Roll No 
import java.sql.*;
import java.util.*;
public class JDBC3
{
	static final String JDBC_DRIVER="sun.jdbc.odbc.JdbcOdbcDriver";
	static final String DB_URL="jdbc:odbc:TEB";
	static final String USER="system";
	static final String PASS="admin";

public static void main(String[]args)
{
	Connection conn=null;
	Statement stmt=null;
try
{
	Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
System.out.println("Connecting database.....");
	conn=DriverManager.getConnection(DB_URL,USER,PASS);
	System.out.println("Connected Successfully");
	System.out.println("Creating Table....");
	stmt=conn.createStatement();
	
	
// Table Creation Query 
	String csql="CREATE TABLE Student(roll integer PRIMARY KEY,name varchar(50),deptname varchar(20));";	
	stmt.executeUpdate(csql);
	System.out.println("Table Created");
//Insert Query	

	String insql="INSERT INTO Student VALUES(1,'Vish','Comp');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");
	insql="INSERT INTO Student VALUES(2,'Preet','EnTC');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");
	
	insql="INSERT INTO Student VALUES(3,'Sumit','IT');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(4,'Ramesh','Mech');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(5,'Suresh','Comp');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(6,'Ganesh','Comp');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(7,'Umesh','IT');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(8,'Rakesh','Comp');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(9,'Suraj','EnTC');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(10,'Ajay','Comp');";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");



//Select Query

	System.out.println("Roll \t NAME \t DeptName");
	 String sql="SELECT * FROM Student; ";

	ResultSet result = stmt.executeQuery(sql);
	while(result.next())
	{
   	System.out.println(result.getInt(1)+"	"+result.getString(2)+ "	" +result.getString(3));
	}	

//Create VIEW Query

	String vsql="CREATE VIEW compdept_view as SELECT * from Student where deptname='Comp';";
	stmt.executeUpdate(vsql);
	System.out.println("View Created");

	System.out.println("*******Details of Created View*****");

	String wsql="SELECT * FROM compdept_view; ";

	ResultSet result1 = stmt.executeQuery(wsql);

//Display VIEW Data Query

	System.out.println("Roll \t NAME \t DeptName");
	while(result1.next())
	{
   	System.out.println(result1.getInt(1)+"	"+result1.getString(2)+ "	" +result1.getString(3));

	}	

//Create INDEX Query

	String isql="CREATE UNIQUE INDEX R1_INDEX ON Student (name);";
	stmt.executeUpdate(isql);
	System.out.println("Index Created");

	System.out.println("*******Details of Created Index*****");
	String indexsql="SELECT * FROM Student order by name desc; ";
	ResultSet result2 = stmt.executeQuery(indexsql);
	System.out.println("Roll \t NAME \t DeptName");
	while(result2.next())
	{
   System.out.println(result2.getInt(1)+"	"+result2.getString(2)+ "	" +result2.getString(3));
	}	

}

catch(SQLException ex)
{
	ex.printStackTrace();
}

catch(Exception e)
{
	e.printStackTrace();
}

finally
{
try
{

if(stmt!=null)
	conn.close();
}
catch(SQLException se)
{
	se.printStackTrace();
}	
}//end try
}//endmain
}
