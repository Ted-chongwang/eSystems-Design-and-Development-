<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>NoSQL Development: MongoDB</title>
    <style>
       .sectionmargin {margin-bottom:6%;}
       .paragraphmargin {margin-bottom:3%;}
       .mainmargin   {maigin-bottom:5%;margin-left:10%;margin-right:10%;margin-top:5%;}
       p {text-align:justify;}
       p.pleft {text-align:left;}
      h2 {text-align:center}
    </style>
  </head>
  
  <body class="mainmargin">
      <div class="sectionmargin">
        <h2>NoSQL Development: MongoDB</h1>
      </div>
      <div class="paragraphmargin">
        <p class="pleft">    Name: Chong Wang</p>
        <p class="pleft">    Student ID: 19040821</p>
        <p class="pleft">    Email: crq2021@autuni.ac.nz</p>
      </div>

      <div class="sectionmargin">
        <h3>Abstract</h3>
        <p class="paragraphmargin">MongoDB is a high-volume distributed NoSQL database that is able to effectively and efficiently store and process big data. This research paper will explore some MongoDB core principle.
        </p>
      </div>

      <div class="sectionmargin">
        <h3>I. INTRODUCTION</h3>
        <p class="paragraphmargin">NoSQL first appeared in 1998 and was developed by Carlo Strozzi as a lightweight, open-source relational database that does not provide SQL functionality [1]. The shortcomings that relational databases cannot overcome were becoming more and more obvious after the rise of the Web 2.0 [2]. With the needs of the NoSQL market, MongoDB was first released in 2009 and has since been updated to the fourth major releases. MongoDB service can be run in the cloud base as MongoDB Atlas that available on AWS, Azure, and GCP cloud platforms or installed in local servers like Ubuntu. MongoDB can be easily operated by using MongoDB statements. However, developers need to understand the working mechanisms to better develop the database.
        </p>
        <p class="paragraphmargin">The findings of this research paper will be illustrated in two sections. Section II describes the data model of MongoDB， section III introduces the main techniques of MongoDB adopted and section IV briefly demonstrates some security mechanisms of MongoDB used.
        </p>
      </div>

      <div class="sectionmargin">
        <h3>II. DATA MODEL</h3>
        <p class="paragraphmargin">The difference between data models is the method they store and access data. MongoDB was developed based on the document store modal, and it stores the data as key-value pairs in Binary JSON (BSON) format document. This feature makes MongoDB high performance and horizontal scalability [3]. In the BSON files, the concept of table, row and columns in a relational database is transformed into a collection, document and field.
        </p>
         <p class="paragraphmargin">IoT-generate data have the characteristics of high volume, velocity and variety. It needs to be stored in a database designed to overcome the rapid growth of big data [4]. Unlike relational databases, MongoDB documents do not need to set the same fields, fields do not need to be defined in advance and the same fields do not need the same data type. Therefore, the MongoDB does not need to store null values and can merge columns of the same expression in different data types from a relational database. It is not necessary to update the entire table when maintaining the structure of the table like a relational database. This makes the MongoDB reduce storage, reduce query time, and facilitate structure updates. MongoDB reduces the complexity of database design, reduces redundancy, and increases maintainability and scalability to meet the needs of big data storage. MongoDB is a good solution for high volume data set with constantly changing schema, but hard to deal with the data have many relations and a lot of normalization [5].
        </p>
      </div>

      <div class="sectionmargin">
        <h3>III. TECHNIQUE</h3>
        <p class="paragraphmargin">
Each database is designed to work in a different domain to meet the functional and non-functional requirements [6]. Some techniques that are used in MongoDB to better adept big data storage.
        </p>
      </div>
    
        <h5>A. Sharding</h5>
        <p class="paragraphmargin">High data volume and throughput of database applications will put a lot of pressure on the performance of a single machine. Using a data model with highly distributed storage catachrestic, MongoDB divides the data and stores them into several nodes. The database developer needs to set the configurations, and the database will automatically do the Sharding work. For client developers, MongoDB Sharding is transparent, and applications only need to operate on the data.
        </p>
    
        <h5>B. Replication</h5>
        <p class="paragraphmargin">of improving fault tolerance for big data storage [7]. The architecture of MongoDB replication is that a Primary node connects with several Secondary nodes. The data will be directly updated into the Primary node and the operation will be recorded into oplog in the Primary node. Then Secondary nodes will read the oplog and update the data that what Primary node did. So that, the data on the Primary and Secondary nodes ensure the final consistency. When the Primary node fails, one Secondary node will be automatically selected as the Primary node, so that the database can run continuously.
        </p>
          
      <div class="sectionmargin">
        <h3>IV. SECURITY</h3>
        <p class="paragraphmargin">Security is very important for any program, and MongoDB provides a variety of mechanisms to ensure the security of the data. MongoDB provides an access control mechanism that restricts only clients and servers with valid credentials can join the system. Like other databases, MongoDB supports multi-user permissions, limited the permissions of different users to access and operate data. MongoDB uses TLS / SSL to support the secure communication between the client and the database or Inside the database cluster. At the same time, we can encrypt the documents to avoid bypassing the security mechanism and obtaining the data directly.
        </p>
      </div>
 
      <div class="sectionmargin">
        <h3>V. CONCLUSION</h3>
        <p class="paragraphmargin">MongoDB is a popular NoSQL database used in various field. Due to the differences with traditional relational databases and other types of NoSQL databases and the continuous updating of MongoDB, developers many get confused about why chose MongoDB, what MongoDB can do and how MongoDB works. This research paper illustrates the data model and the main techniques that MongoDB adopted. Developers can explorer those areas to better implement solutions on MongoDB.
        </p>
        
      <div class="sectionmargin">
        <h3>REFERENCES</h3>
        <p>[1] C. Strozzi, "NoSQL: A relational database management system," Lainattu, vol. 5, p. 2014, 1998.
        </p>
        <p>[2] H. Zhang, Y. Wang, and J. Han, "Middleware design for integrating relational database and NOSQL based on data dictionary," International Conference on Transportation, Mechanical, and Electrical Engineering (TMEE), 2011: IEEE, pp. 1469-1472.
        </p>
        <p>[3] A. Nayak, A. Poriya, and D. Poojary, "Type of NOSQL databases and its comparison with relational databases," International Journal of Applied Information Systems, vol. 5, no. 4, pp. 16-19, 2013.
        </p>
        <p>[4] Y.-S. Kang, I.-H. Park, J. Rhee, and Y.-H. Lee, "MongoDB-based repository design for IoT-generated RFID/sensor big data," IEEE Sensors Journal, vol. 16, no. 2, pp. 485-497, 2015.
        </p>
        <p>[5] Z. Parker, S. Poe, and S. V. Vrbsky, "Comparing nosql mongodb to a sql db," ACM Southeast Conference, 2013, pp. 1-6.
        </p>
        <p>[6] Gessert, W. Wingerath, S. Friedrich, and N. Ritter, "NoSQL database systems: a survey and decision guidance," Computer Science-Research and Development, vol. 32, no. 3-4, pp. 353-365, 2017.
        </p>
        <p>[7] R. Nachiappan, B. Javadi, R. N. Calheiros, and K. M. Matawie, "Cloud storage reliability for big data applications: A state of the art survey," Journal of Network and Computer Applications, vol. 97, pp. 35-47, 2017.
        </p>
        <p>[8] MongoDB: https://www.mongodb.com
        </p>
      </div>
          
    </div>
  </body>
</html>
