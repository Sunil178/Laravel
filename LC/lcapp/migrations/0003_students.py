# Generated by Django 2.2.5 on 2019-11-29 11:59

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('lcapp', '0002_auto_20191128_1534'),
    ]

    operations = [
        migrations.CreateModel(
            name='Students',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('gen_reg_no', models.CharField(max_length=30)),
                ('name', models.CharField(max_length=50)),
                ('cast', models.CharField(max_length=50)),
                ('subcast', models.CharField(max_length=50)),
                ('birthplace', models.CharField(max_length=500)),
                ('dob', models.CharField(max_length=50)),
                ('lastschool', models.CharField(max_length=400)),
                ('progress', models.CharField(max_length=100)),
                ('conduct', models.CharField(max_length=100)),
                ('dol', models.CharField(max_length=100)),
                ('course', models.CharField(max_length=300)),
                ('reason', models.CharField(max_length=300)),
                ('remark', models.CharField(max_length=100)),
                ('place', models.CharField(max_length=100)),
                ('date', models.CharField(max_length=100)),
            ],
        ),
    ]
