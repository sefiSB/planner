class Lesson {
    constructor(name, day, length) {
        this.name = name;
        this.day = day
        this.length=length
    }
}

class User{
    constructor(username,password){
        this.username=username
        this.password=password
        this.lessons=[]
    }
    addLesson(lesson){
        this.lessons.push(lesson)
    }
}