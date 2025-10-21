import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';
import { Users, BookOpen } from 'lucide-react';

interface AdminDashboardProps {
    breadcrumbs: Array<{
        title: string;
        href: string;
    }>;
    teacherCount: number;
    studentCount: number;
}

export default function AdminDashboard({ 
    breadcrumbs, 
    teacherCount, 
    studentCount 
}: AdminDashboardProps) {
    const stats = [
        {
            title: 'Jumlah Guru',
            value: teacherCount,
            icon: BookOpen,
            change: '+5',
            changeType: 'positive',
        },
        {
            title: 'Jumlah Siswa',
            value: studentCount,
            icon: Users,
            change: '+12',
            changeType: 'positive',
        },
    ];

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Admin Dashboard" />

            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div>
                    <h1 className="text-3xl font-bold tracking-tight">
                        Dashboard
                    </h1>
                    <p className="text-muted-foreground">
                        Selamat datang di panel admin. Monitor dan kelola
                        sistem TAHFIDZ dari sini.
                    </p>
                </div>

                {/* Stats Cards */}
                <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-2">
                    {stats.map((stat) => (
                        <Card key={stat.title}>
                            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
                                <CardTitle className="text-sm font-medium">
                                    {stat.title}
                                </CardTitle>
                                <stat.icon className="h-4 w-4 text-muted-foreground" />
                            </CardHeader>
                            <CardContent>
                                <div className="text-2xl font-bold">
                                    {stat.value}
                                </div>
                                <p className="text-xs text-muted-foreground">
                                    <span
                                        className={`${
                                            stat.changeType === 'positive'
                                                ? 'text-green-600'
                                                : stat.changeType === 'negative'
                                                  ? 'text-red-600'
                                                  : 'text-muted-foreground'
                                        }`}
                                    >
                                        {stat.change}
                                    </span>
                                </p>
                            </CardContent>
                        </Card>
                    ))}
                </div>
            </div>
        </AppLayout>
    );
}
