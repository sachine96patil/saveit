/*
___________________________________________________________
// Programs to create Table and insert a Records into table
//Assignment No. 1 			Roll No :
___________________________________________________________  */

import java.sql.*;
import java.util.*;

public class JDBC1
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
System.out.println("Connecting Database.....");
	conn=DriverManager.getConnection(DB_URL,USER,PASS);
	System.out.println("Connected Successfully");
	System.out.println("Creating Table....");
	stmt=conn.createStatement();
/* Table Creation Query */
	String csql="CREATE TABLE Student (Roll INTEGER not NULL,Name VARCHAR(30),Age INTEGER);";
	
	stmt.executeUpdate(csql);
	System.out.println("Table Created");
//Insert Query	

String insql="INSERT INTO Student VALUES(1,'Vish',22);";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");
	insql="INSERT INTO Student VALUES(2,'Preet',19);";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");
	
	insql="INSERT INTO Student VALUES(3,'Sumit',18);";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");

	insql="INSERT INTO Student VALUES(4,'Ramesh',20);";
	stmt.executeUpdate(insql);
	System.out.println("One Record Inserted");


	//Select Query
	System.out.println("Roll \t NAME \t Age");
	 String sql="SELECT * FROM Student; ";

	ResultSet result = stmt.executeQuery(sql);
	while(result.next())
	{
   	System.out.println(result.getInt(1)+"	"+result.getString(2)+ "	" +result.getInt(3));
	}	

	System.out.println("*******Select using where Clause*****");
	System.out.println("Roll \t NAME \t Age");
	String wsql="SELECT * FROM Student where Roll=3; ";

	ResultSet result1 = stmt.executeQuery(wsql);
	while(result1.next())
	{
   	System.out.println(result1.getInt(1)+"	"+result1.getString(2)+ "	" +result1.getInt(3));
	}	

/* Update Query */
	String upsql="UPDATE Student SET NAME='Anjali' WHERE Roll=2;";
	stmt.executeUpdate(upsql);
	System.out.println("Record Updated");

/* Delete table data Query */
	String delsql=" Delete from Student WHERE Roll=4;";
	stmt.executeUpdate(delsql);
	System.out.println("Record Deleted");

	
//Record Display Using Select QUERY	
	System.out.println("Records after Updated");
	String sql1="select * from Student;";
	ResultSet result2 = stmt.executeQuery(sql1);
	while(result2.next())
	{
	System.out.println(result2.getInt(1)+"	"+result2.getString(2)+ "	" +result2.getInt(3));
	}

//Drop Table Query	

	String dropsql="drop table Student;";
	stmt.executeUpdate(dropsql);
	System.out.println("Table Droped");



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
